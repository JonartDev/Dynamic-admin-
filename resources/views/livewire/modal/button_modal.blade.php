<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addnewButtonsModal" tabindex="-1" aria-labelledby="addnewButtonsModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addnewButtonsModalLabel">{{ __('translate.new') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg></button>
            </div>
            <form wire:submit.prevent="saveButton">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>{{ __('translate.name') }}</label>
                                <input type="text" wire:model="name" class="form-control">
                                @error('name') <span class="text-danger">{{ __('translate.error_name') }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.link') }}</label>
                                <input type="text" wire:model="buttons" class="form-control" placeholder="https://">@error('buttons')
                                <span class="text-danger">{{ __('translate.error_link') }}
                                </span> @enderror
                            </div>

                            <div class="mb-3">
                                <label>{{ __('translate.order_number') }}</label>
                                <input type="number" pattern="\d*" wire:model="order_number" class="form-control">
                                @error('order_number') <span class="text-danger">{{ __('translate.error_order') }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.group') }}</label>
                                <!-- <input type="text" wire:model="_group" class="form-control"> -->

                                <select class="form-control" wire:model="_group">
                                    <option value="android" selected>Android</option>
                                    <option value="ios">ios</option>
                                </select>
                                @error('_group') <span class="text-danger">{{ __('translate.error_group') }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 mt-5">
                                <!-- <label>Image</label> -->
                                <div class="col-lg-12 ms-auto text-center mt-5 mt-lg-0">
                                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                        @if($image_path)
                                        <img class="w-50 position-relative z-index-2 pt-4 zoom-in-out-box" src="{{ $image_path->temporaryUrl() }}" alt="">
                                        @else
                                        <label for="file" class="custum-file-upload">
                                            <div class="icon">
                                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 10 11 9.55228 11 9V3H18C18.5523 18 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <span>{{ __('translate.click_to_upload') }}</span>
                                            </div>
                                            <input id="file" wire:model="image_path" type="file" class="form-control">
                                        </label>
                                        @endif

                                    </div>
                                    @error('image_path') <span class="text-danger">{{ __('translate.error_image') }}</span> @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.description') }}</label>
                                <textarea type="text" wire:model="description" class="form-control"></textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-success">
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 20.75H7C6.27065 20.75 5.57118 20.4603 5.05546 19.9445C4.53973 19.4288 4.25 18.7293 4.25 18V6C4.25 5.27065 4.53973 4.57118 5.05546 4.05546C5.57118 3.53973 6.27065 3.25 7 3.25H14.5C14.6988 3.25018 14.8895 3.32931 15.03 3.47L19.53 8C19.6707 8.14052 19.7498 8.33115 19.75 8.53V18C19.75 18.7293 19.4603 19.4288 18.9445 19.9445C18.4288 20.4603 17.7293 20.75 17 20.75ZM7 4.75C6.66848 4.75 6.35054 4.8817 6.11612 5.11612C5.8817 5.35054 5.75 5.66848 5.75 6V18C5.75 18.3315 5.8817 18.6495 6.11612 18.8839C6.35054 19.1183 6.66848 19.25 7 19.25H17C17.3315 19.25 17.6495 19.1183 17.8839 18.8839C18.1183 18.6495 18.25 18.3315 18.25 18V8.81L14.19 4.75H7Z" fill="#ffffff" />
                            <path d="M16.75 20H15.25V13.75H8.75V20H7.25V13.5C7.25 13.1685 7.3817 12.8505 7.61612 12.6161C7.85054 12.3817 8.16848 12.25 8.5 12.25H15.5C15.8315 12.25 16.1495 12.3817 16.3839 12.6161C16.6183 12.8505 16.75 13.1685 16.75 13.5V20Z" fill="#ffffff" />
                            <path d="M12.47 8.75H8.53001C8.3606 8.74869 8.19311 8.71403 8.0371 8.64799C7.88109 8.58195 7.73962 8.48582 7.62076 8.36511C7.5019 8.24439 7.40798 8.10144 7.34437 7.94443C7.28075 7.78741 7.24869 7.61941 7.25001 7.45V4H8.75001V7.25H12.25V4H13.75V7.45C13.7513 7.61941 13.7193 7.78741 13.6557 7.94443C13.592 8.10144 13.4981 8.24439 13.3793 8.36511C13.2604 8.48582 13.1189 8.58195 12.9629 8.64799C12.8069 8.71403 12.6394 8.74869 12.47 8.75Z" fill="#ffffff" />
                        </svg> &nbsp; {{ __('translate.save') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Update Links Modal -->
<div wire:ignore.self class="modal fade" id="updateButtonsModal" tabindex="-1" aria-labelledby="updateButtonsModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateButtonsModalLabel">{{ __('translate.update') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg></button>
            </div>
            <form wire:submit.prevent="updateButton">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>{{ __('translate.name') }}</label>
                                <input type="text" wire:model="name" class="form-control">
                                @error('name') <span id="text-danger" class="text-danger">{{ __('translate.error_name') }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.link') }}</label>
                                <input type="text" wire:model="buttons" class="form-control">
                                @error('buttons') <span id="text-danger" class="text-danger">{{ __('translate.error_link') }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.order_number') }}</label>
                                <input type="number" pattern="\d*" wire:model="order_number" class="form-control">
                                @error('order_number') <span class="text-danger">{{ __('translate.error_order') }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.group') }}</label>
                                <!-- <input type="text" wire:model="_group" class="form-control"> -->

                                <select class="form-control" wire:model="_group">
                                    <option value="android" selected>Android</option>
                                    <option value="ios">ios</option>
                                </select>
                                @error('_group') <span class="text-danger">{{ __('translate.error_group') }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 zoom-in-out-box mt-5">
                                <!-- <label>Image</label> -->
                                <div class="col-lg-12 ms-auto text-center mt-5 mt-lg-0">
                                    <div class="position-relative d-flex align-items-center justify-content-center h-100">

                                        <!-- <input type="file" wire:model="image_path" class="form-control"> -->
                                        @if($image_path && method_exists($image_path, 'temporaryUrl'))
                                        <img class="w-50 position-relative z-index-2 pt-4" src="{{ $image_path->temporaryUrl() }}" alt="">
                                        @elseif(is_string($imagePath))
                                        {{-- Display the existing image --}}
                                        @if($imagePath == 'No Image upload')
                                        <label for="file" class="custum-file-upload">
                                            <div class="icon">
                                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 10 11 9.55228 11 9V3H18C18.5523 18 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <span>{{ __('translate.click_to_upload') }}</span>
                                            </div>
                                            <input id="file" wire:model="image_path" type="file" class="form-control">
                                        </label>
                                        @else
                                        <label for="file" class="custum-file-update ">
                                            <img class="w-100 position-relative z-index-2 pt-2" src="{{ asset('storage/'.$imagePath) }}" alt="{{ __('translate.existing_image') }}">
                                            <input id="file" wire:model="image_path" type="file" class="form-control">
                                        </label>

                                        @endif
                                        @else
                                        @endif
                                    </div>
                                </div>
                                @error('image_path') <span id="text-danger" class="text-danger">{{ __('translate.error_image') }}</span> @enderror
                            </div>
                            <div class="mb-3 d-flex align-items-left">
                                <div class="form-check form-switch ps-0 ">
                                    <input wire:model="status" class="form-check-input ms-auto" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" id="flexSwitchCheckDefault">
                                    <label class="form-check-label mt-1 text-body text-truncate" for="flexSwitchCheckDefault">{{ $status == '1' ? __('translate.active'):__('translate.inactive') }}</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.description') }}</label>
                                <textarea type="text" wire:model="description" class="form-control"></textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn bg-gradient-info">
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 20.75H7C6.27065 20.75 5.57118 20.4603 5.05546 19.9445C4.53973 19.4288 4.25 18.7293 4.25 18V6C4.25 5.27065 4.53973 4.57118 5.05546 4.05546C5.57118 3.53973 6.27065 3.25 7 3.25H14.5C14.6988 3.25018 14.8895 3.32931 15.03 3.47L19.53 8C19.6707 8.14052 19.7498 8.33115 19.75 8.53V18C19.75 18.7293 19.4603 19.4288 18.9445 19.9445C18.4288 20.4603 17.7293 20.75 17 20.75ZM7 4.75C6.66848 4.75 6.35054 4.8817 6.11612 5.11612C5.8817 5.35054 5.75 5.66848 5.75 6V18C5.75 18.3315 5.8817 18.6495 6.11612 18.8839C6.35054 19.1183 6.66848 19.25 7 19.25H17C17.3315 19.25 17.6495 19.1183 17.8839 18.8839C18.1183 18.6495 18.25 18.3315 18.25 18V8.81L14.19 4.75H7Z" fill="#ffffff" />
                            <path d="M16.75 20H15.25V13.75H8.75V20H7.25V13.5C7.25 13.1685 7.3817 12.8505 7.61612 12.6161C7.85054 12.3817 8.16848 12.25 8.5 12.25H15.5C15.8315 12.25 16.1495 12.3817 16.3839 12.6161C16.6183 12.8505 16.75 13.1685 16.75 13.5V20Z" fill="#ffffff" />
                            <path d="M12.47 8.75H8.53001C8.3606 8.74869 8.19311 8.71403 8.0371 8.64799C7.88109 8.58195 7.73962 8.48582 7.62076 8.36511C7.5019 8.24439 7.40798 8.10144 7.34437 7.94443C7.28075 7.78741 7.24869 7.61941 7.25001 7.45V4H8.75001V7.25H12.25V4H13.75V7.45C13.7513 7.61941 13.7193 7.78741 13.6557 7.94443C13.592 8.10144 13.4981 8.24439 13.3793 8.36511C13.2604 8.48582 13.1189 8.58195 12.9629 8.64799C12.8069 8.71403 12.6394 8.74869 12.47 8.75Z" fill="#ffffff" />
                        </svg>&nbsp; {{ __('translate.update') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- Delete Link Modal -->
<div wire:ignore.self class="modal fade" id="deleteButtonsModal" tabindex="-1" aria-labelledby="deleteButtonsModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">{{ __('translate.remove') }}</h6>
                        </div>
                        <div class="col-md-4 text-right">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" class="size-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg></button>
                            <!-- <a href="javascript:;">
                                <i class="fas fa-close text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Profile" aria-label="Edit Profile"></i><span class="sr-only">Edit Profile</span>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form wire:submit.prevent="destroyButton">
                        @if($buttonDetails)
                        <p class="text-sm">
                            {{ __('translate.delete_message') }}
                        </p>
                        <hr class="horizontal gray-light my-4">
                        <ul class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <li class="border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{{ __('translate.name') }}:
                                        </strong> &nbsp; {{ $buttonDetails->name }}</li>
                                    <li class="border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{{ __('translate.order_number') }}:
                                        </strong> &nbsp; {{ $buttonDetails->order_number }}</li>
                                    <li class="border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{{ __('translate.status') }}:
                                        </strong> &nbsp; {{ $buttonDetails->status == '1' ? __('translate.active'):__('translate.inactive') }}</li>
                                    <li class="border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{{ __('translate.description') }}:
                                        </strong> &nbsp; {{ $buttonDetails->description }}</li>
                                    <li class="border-0 ps-0 text-sm"><strong class="text-dark">{{ __('translate.url') }}:</strong>
                                        &nbsp; {{ $buttonDetails->links }}</li>
                                    <li class="border-0 ps-0 text-sm"><strong class="text-dark">{{ __('translate.image') }}:</strong>
                                        &nbsp; {{ $buttonDetails->image_path }}</li>
                                    <li class="border-0 ps-0 text-sm"><strong class="text-dark">{{ __('translate.group') }}:</strong>
                                        &nbsp; {{ $buttonDetails->_group }}</li>
                                </div>
                                <div class="col-md-6">
                                    <li class="custum-file-update ">
                                        @if($buttonDetails->image_path)
                                        @if($buttonDetails->image_path == 'No Image upload')
                                        @else
                                        <img class="w-50 position-relative z-index-2 pt-4 zoom-in-out-box" src="{{ asset('storage/'.$buttonDetails->image_path) }}" alt="{{ __('translate.existing_image') }}">
                                        @endif
                                        @endif
                                    </li>
                                </div>
                            </div>
                        </ul>
                        <div class="modal-footer align-items-center">
                            <!-- <button type="submit" class="btn text-md cursor-pointer">
                                <i class="cursor-pointer fas fa-trash text-danger mr-3" aria-hidden="true"></i>Delete
                            </button> -->
                            <button class="btn bg-gradient-danger btn-md" type="submit"><svg height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.998 511.998" xml:space="preserve">
                                    <polygon style="fill:#ffffff;" points="178.652,462.067 110.276,462.067 82.918,106.177 178.652,106.177 "></polygon>
                                    <path style="fill:#ffffff;" d="M311.198,70.475c-8.484,0-15.365-6.88-15.365-15.365V30.73H189.232V55.11  c0,8.484-6.88,15.365-15.365,15.365s-15.365-6.88-15.365-15.365V15.365C158.503,6.88,165.383,0,173.867,0h137.331  c8.484,0,15.365,6.88,15.365,15.365V55.11C326.563,63.596,319.684,70.475,311.198,70.475z"></path>
                                    <path style="fill:#ffffff;" d="M380.052,319.948l16.391-213.769H300.71v267.369C313.965,342.592,344.435,320.72,380.052,319.948z"></path>
                                    <g>
                                        <path style="fill:#ffffff;" d="M470.304,392.923c-8.484,0-15.365,6.88-15.365,15.365c0,40.242-32.741,72.983-72.983,72.983   c-40.243,0-72.984-32.741-72.984-72.983c0-34.479,24.522-63.845,57.028-71.208c0.011-0.002,0.02-0.005,0.031-0.006   c2.303-0.521,4.645-0.93,7.022-1.223c0.048-0.006,0.095-0.011,0.143-0.017c1.119-0.135,2.245-0.244,3.377-0.329   c0.081-0.006,0.164-0.014,0.246-0.018c1.183-0.083,2.374-0.14,3.571-0.166c8.077-0.171,14.554-6.544,15.005-14.475l15.282-199.302   h26.991c8.484,0,15.365-6.88,15.365-15.365s-6.88-15.365-15.365-15.365h-41.224h-95.735H178.652H82.918H41.695   c-8.484,0-15.365,6.88-15.365,15.365s6.88,15.365,15.365,15.365h26.994l26.268,341.704c0.615,8.005,7.291,14.186,15.32,14.186   h68.376h47.866c8.484,0,15.365-6.88,15.365-15.365c0-8.484-6.88-15.365-15.365-15.365h-32.501V121.542h91.327v248.965   c-4.648,11.891-7.103,24.653-7.103,37.779c0,57.188,46.526,103.712,103.714,103.712s103.712-46.525,103.712-103.712   C485.669,399.802,478.788,392.923,470.304,392.923z M316.075,121.542h63.782l-14.131,184.302c-0.069,0.011-0.137,0.026-0.206,0.035   c-0.931,0.147-1.856,0.32-2.781,0.492c-0.273,0.052-0.545,0.103-0.817,0.158c-16.835,3.283-32.529,10.675-45.846,21.666V121.542   H316.075z M163.287,446.703h-38.782L99.509,121.542h63.779v325.161H163.287z"></path>
                                        <path style="fill:#ffffff;" d="M403.685,408.297l7.968-7.968c6-6,6-15.729,0-21.73c-6.001-5.998-15.727-5.998-21.73,0l-7.968,7.968   l-7.968-7.968c-5.998-5.995-15.724-5.998-21.73,0c-6,6-6,15.729,0,21.73l7.968,7.968l-7.968,7.968c-6,6-6,15.729,0,21.73   c3.001,2.999,6.933,4.5,10.864,4.5c3.932,0,7.864-1.501,10.864-4.5l7.968-7.968l7.968,7.968c3.001,2.999,6.933,4.5,10.864,4.5   c3.932,0,7.864-1.501,10.864-4.5c6-6,6-15.729,0-21.73L403.685,408.297z"></path>
                                    </g>
                                </svg> {{ __('translate.delete') }}</button>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>