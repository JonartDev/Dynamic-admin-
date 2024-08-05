<div class="main-content" id="mainList">
    <x-loading-indicator />
    <div class="row">
        @include('livewire.modal.link_modal')
        <div class="col-12">
            @if (session()->has('message'))
            <!-- <div class="alert alert-success p-2 mt-3 alert-dismissible fade show" role="alert" id="alertMessage">{{ session('message')}}</div> -->
            <!-- <div wire:model="showSuccesNotification" class="mt-3 alert alert-success alert-dismissible fade show" id="alertMessage" role="alert">
                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                <span class="alert-text text-white">{{ session('message')}}</span>
                <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            <div class="check">
                <i class="far fa-check-circle color"></i> &nbsp; &nbsp;
                <span>Nailed It!</span>
            </div> -->
            @endif
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('translate.list') }}</h5>
                        </div>

                        <button data-bs-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" data-bs-target="#addnewLinksModal" class="btn bg-gradient-primary btn-sm mb-0" id="addnew" type="button">
                            +&nbsp; {{ __('translate.add') }}</button>
                        <!-- <button class="btn bg-gradient-primary btn-sm mb-0" id="addnew" type="button">+&nbsp; Add New</button> -->
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="row ">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 p-2 pr-4">
                            <input class="inputSearch" type="text" wire:model="search" placeholder="{{ __('translate.search')}}..." id="email" name="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('translate.order_number') }}
                                    </th>
                                    <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th> -->
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('translate.group') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('translate.name') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('translate.link') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('translate.image_path') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('translate.status') }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('translate.action') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($linksData) > 0)
                                @foreach($linksData as $link)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$link->order_number}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $link->_group }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$link->name}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $link->links }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">
                                            @if($link->image_path === 'No Image upload')
                                            {{$link->image_path}}
                                            @else
                                            <img class="w-50" src=" {{ asset('storage/'.$link->image_path) }}" alt="">
                                            @endif
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0" style="color: <?php echo $link->status == '1' ? 'green' : 'red'; ?>">
                                            {{ $link->status == '1' ? __('translate.active') : __('translate.inactive') }}
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="mx-1" data-bs-toggle="modal" data-bs-target="#updateLinksModal" wire:click="editLink({{$link->id}})">
                                            <!-- <i class="fas fa-edit text-secondary"></i> -->
                                            <svg class="feather feather-edit" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="mx-1 text-danger" data-bs-toggle="modal" data-bs-target="#deleteLinksModal" wire:click="deleteLink({{$link->id}})">
                                            <!-- <i class="cursor-pointer text-danger"></i> -->
                                            <svg height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.998 511.998" xml:space="preserve">
                                                <polygon style="fill:#F4B2B0;" points="178.652,462.067 110.276,462.067 82.918,106.177 178.652,106.177 " />
                                                <path style="fill:#B3404A;" d="M311.198,70.475c-8.484,0-15.365-6.88-15.365-15.365V30.73H189.232V55.11  c0,8.484-6.88,15.365-15.365,15.365s-15.365-6.88-15.365-15.365V15.365C158.503,6.88,165.383,0,173.867,0h137.331  c8.484,0,15.365,6.88,15.365,15.365V55.11C326.563,63.596,319.684,70.475,311.198,70.475z" />
                                                <path style="fill:#F4B2B0;" d="M380.052,319.948l16.391-213.769H300.71v267.369C313.965,342.592,344.435,320.72,380.052,319.948z" />
                                                <g>
                                                    <path style="fill:#B3404A;" d="M470.304,392.923c-8.484,0-15.365,6.88-15.365,15.365c0,40.242-32.741,72.983-72.983,72.983   c-40.243,0-72.984-32.741-72.984-72.983c0-34.479,24.522-63.845,57.028-71.208c0.011-0.002,0.02-0.005,0.031-0.006   c2.303-0.521,4.645-0.93,7.022-1.223c0.048-0.006,0.095-0.011,0.143-0.017c1.119-0.135,2.245-0.244,3.377-0.329   c0.081-0.006,0.164-0.014,0.246-0.018c1.183-0.083,2.374-0.14,3.571-0.166c8.077-0.171,14.554-6.544,15.005-14.475l15.282-199.302   h26.991c8.484,0,15.365-6.88,15.365-15.365s-6.88-15.365-15.365-15.365h-41.224h-95.735H178.652H82.918H41.695   c-8.484,0-15.365,6.88-15.365,15.365s6.88,15.365,15.365,15.365h26.994l26.268,341.704c0.615,8.005,7.291,14.186,15.32,14.186   h68.376h47.866c8.484,0,15.365-6.88,15.365-15.365c0-8.484-6.88-15.365-15.365-15.365h-32.501V121.542h91.327v248.965   c-4.648,11.891-7.103,24.653-7.103,37.779c0,57.188,46.526,103.712,103.714,103.712s103.712-46.525,103.712-103.712   C485.669,399.802,478.788,392.923,470.304,392.923z M316.075,121.542h63.782l-14.131,184.302c-0.069,0.011-0.137,0.026-0.206,0.035   c-0.931,0.147-1.856,0.32-2.781,0.492c-0.273,0.052-0.545,0.103-0.817,0.158c-16.835,3.283-32.529,10.675-45.846,21.666V121.542   H316.075z M163.287,446.703h-38.782L99.509,121.542h63.779v325.161H163.287z" />
                                                    <path style="fill:#B3404A;" d="M403.685,408.297l7.968-7.968c6-6,6-15.729,0-21.73c-6.001-5.998-15.727-5.998-21.73,0l-7.968,7.968   l-7.968-7.968c-5.998-5.995-15.724-5.998-21.73,0c-6,6-6,15.729,0,21.73l7.968,7.968l-7.968,7.968c-6,6-6,15.729,0,21.73   c3.001,2.999,6.933,4.5,10.864,4.5c3.932,0,7.864-1.501,10.864-4.5l7.968-7.968l7.968,7.968c3.001,2.999,6.933,4.5,10.864,4.5   c3.932,0,7.864-1.501,10.864-4.5c6-6,6-15.729,0-21.73L403.685,408.297z" />
                                                </g>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr class="text-center">
                                    <td colspan="5">{{ __('translate.norecordfound') }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="p-1">
                        {{ $linksPaginator->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>