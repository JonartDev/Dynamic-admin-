<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\Component;
use App\Models\AnalyticsCode;
use App\Models\Slug;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SlugManagement extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public $slug, $code, $slug_id, $status , $name ;
    public $showSuccesNotification  = false;
    public $slugsData;
    public $slugDetails;

    protected function rules()
    {
        return [
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('slug', 'slug')->ignore($this->slug_id),
            ],
            'code' => '',
            'name' =>''
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function rand(){
        $randomText = Str::random(10);
        $this->slug = $randomText;
    }
    public function saveSlug()
    {

        $this->validate();
        $saveData = [
            'name' => $this->name,
            'code' => $this->code,
            'slug' => $this->slug,
        ];

        Slug::create($saveData);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->closeModal();
    }

    public function updateSlug()
    {
        $this->validate();

        $updateData = [
            'slug' => $this->slug,
            'name' => $this->name,
            'code' => $this->code,
            // 'status' => $this->status,
        ];

        Slug::find($this->slug_id)->update($updateData);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->closeModal();
    }

    public function editSlug(int $slug_id)
{
    $slug = Slug::findOrFail($slug_id);
    if ($slug) {
        $this->slug_id = $slug->id;
        $this->slug = $slug->slug;
        $this->name = $slug->name;
        $this->code = $slug->code;
        $this->status = $slug->status;

        // Open the update modal
        $this->dispatchBrowserEvent('close-modal');
    } else {
        return redirect()->to('/GdascasdgsX');
    }
}

    public function deleteSlug(int $slug_id)
    {
        $this->slug_id = $slug_id;
        $this->slugDetails = Slug::find($slug_id);
    }
    public function destroySlug()
    {
        Slug::find($this->slug_id)->delete();
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->closeModal();
    }
    public function closeModal()
    {
        $this->resetInput();
        return redirect()->to('/GdascasdgsX');
    }
    public function resetInput()
    {
        $this->reset();
        $this->resetValidation();
    }
    public function render()
    {
        $slugsPaginator = Slug::where(function ($query) {
            $query
                ->where(function ($subQuery) {
                    $subQuery->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('slug', 'like', '%' . $this->search . '%')
                        ->orWhere('code', 'like', '%' . $this->search . '%')
                        ->orWhere(function ($query) {
                            if (strtolower($this->search) === 'active') {
                                $query->where('status', 1);
                            } elseif (strtolower($this->search) === 'inactive') {
                                $query->where('status', 0);
                            } else {
                                $query->where('status', 'like', '%' . $this->search . '%');
                            }
                        });
                });
        })->orderBy('id')->paginate(5);
        $this->slugsData = $slugsPaginator->items();

        return view('livewire.slug-management',
        ['slugssData' => $this->slugsData], ['slugsPaginator' => $slugsPaginator]);
    }
}
