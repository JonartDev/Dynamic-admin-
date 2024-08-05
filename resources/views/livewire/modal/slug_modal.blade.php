<!-- Delete slug Modal -->
<div wire:ignore.self class="modal fade" id="deleteSlugsModal" tabindex="-1" aria-labelledby="deleteSlugsModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
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
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form wire:submit.prevent="destroySlug">
                        @if ($slugDetails)
                        <p class="text-sm">
                            {{ __('translate.delete_message') }}
                        </p>
                        <hr class="horizontal gray-light my-4">
                        <ul class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <li class="border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{{ __('translate.slug') }}:
                                        </strong> &nbsp; {{ $slugDetails->slug }}</li>
                                    <li class="border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{{ __('translate.code') }}:
                                        </strong> &nbsp; {{ $slugDetails->code }}</li>
                                    <li class="border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{{ __('translate.status') }}:
                                        </strong> &nbsp;
                                        {{ $slugDetails->status == '1' ? __('translate.active') : __('translate.inactive') }}
                                    </li>
                                </div>

                            </div>
                        </ul>
                        <div class="modal-footer align-items-center">

                            <button class="btn bg-gradient-danger btn-md" type="submit"><svg height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.998 511.998" xml:space="preserve">
                                    <polygon style="fill:#ffffff;" points="178.652,462.067 110.276,462.067 82.918,106.177 178.652,106.177 ">
                                    </polygon>
                                    <path style="fill:#ffffff;" d="M311.198,70.475c-8.484,0-15.365-6.88-15.365-15.365V30.73H189.232V55.11  c0,8.484-6.88,15.365-15.365,15.365s-15.365-6.88-15.365-15.365V15.365C158.503,6.88,165.383,0,173.867,0h137.331  c8.484,0,15.365,6.88,15.365,15.365V55.11C326.563,63.596,319.684,70.475,311.198,70.475z">
                                    </path>
                                    <path style="fill:#ffffff;" d="M380.052,319.948l16.391-213.769H300.71v267.369C313.965,342.592,344.435,320.72,380.052,319.948z">
                                    </path>
                                    <g>
                                        <path style="fill:#ffffff;" d="M470.304,392.923c-8.484,0-15.365,6.88-15.365,15.365c0,40.242-32.741,72.983-72.983,72.983   c-40.243,0-72.984-32.741-72.984-72.983c0-34.479,24.522-63.845,57.028-71.208c0.011-0.002,0.02-0.005,0.031-0.006   c2.303-0.521,4.645-0.93,7.022-1.223c0.048-0.006,0.095-0.011,0.143-0.017c1.119-0.135,2.245-0.244,3.377-0.329   c0.081-0.006,0.164-0.014,0.246-0.018c1.183-0.083,2.374-0.14,3.571-0.166c8.077-0.171,14.554-6.544,15.005-14.475l15.282-199.302   h26.991c8.484,0,15.365-6.88,15.365-15.365s-6.88-15.365-15.365-15.365h-41.224h-95.735H178.652H82.918H41.695   c-8.484,0-15.365,6.88-15.365,15.365s6.88,15.365,15.365,15.365h26.994l26.268,341.704c0.615,8.005,7.291,14.186,15.32,14.186   h68.376h47.866c8.484,0,15.365-6.88,15.365-15.365c0-8.484-6.88-15.365-15.365-15.365h-32.501V121.542h91.327v248.965   c-4.648,11.891-7.103,24.653-7.103,37.779c0,57.188,46.526,103.712,103.714,103.712s103.712-46.525,103.712-103.712   C485.669,399.802,478.788,392.923,470.304,392.923z M316.075,121.542h63.782l-14.131,184.302c-0.069,0.011-0.137,0.026-0.206,0.035   c-0.931,0.147-1.856,0.32-2.781,0.492c-0.273,0.052-0.545,0.103-0.817,0.158c-16.835,3.283-32.529,10.675-45.846,21.666V121.542   H316.075z M163.287,446.703h-38.782L99.509,121.542h63.779v325.161H163.287z">
                                        </path>
                                        <path style="fill:#ffffff;" d="M403.685,408.297l7.968-7.968c6-6,6-15.729,0-21.73c-6.001-5.998-15.727-5.998-21.73,0l-7.968,7.968   l-7.968-7.968c-5.998-5.995-15.724-5.998-21.73,0c-6,6-6,15.729,0,21.73l7.968,7.968l-7.968,7.968c-6,6-6,15.729,0,21.73   c3.001,2.999,6.933,4.5,10.864,4.5c3.932,0,7.864-1.501,10.864-4.5l7.968-7.968l7.968,7.968c3.001,2.999,6.933,4.5,10.864,4.5   c3.932,0,7.864-1.501,10.864-4.5c6-6,6-15.729,0-21.73L403.685,408.297z">
                                        </path>
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
{{-- update --}}
<div wire:ignore.self class="modal fade" id="updateSlugsModal" tabindex="-1" aria-labelledby="updateSlugsModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateSlugsModalLabel">{{ __('translate.update') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit.prevent="updateSlug">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-auto">
                                    <label for="slug" class="col-form-label">{{ __('translate.name') }}</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="name" wire:model="name" class="form-control">
                                </div>
                                @error('name') <span class="text-danger">{{ __('translate.error_name') }}</span> @enderror

                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-auto">
                                    <label for="slug" class="col-form-label">{{ __('translate.slug') }}</label>
                                </div>
                                <div class="col-auto ml-3">
                                    <input type="text" id="slug" wire:model="slug" class="form-control" aria-describedby="passwordHelpInline" placeholder="{{ __('translate.slug') }}">
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-success" wire:click="rand" style="margin-bottom: 0;">
                                        {{ __('translate.generate') }}
                                    </button>
                                </div>
                                @error('slug')
                                <span class="text-danger">{{ __('translate.error_slug') }}</span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.code') }}</label>
                                <input type="text" wire:model="code" class="form-control">
                                @error('code')
                                <span class="text-danger">{{ __('translate.error_name') }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-info">
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 20.75H7C6.27065 20.75 5.57118 20.4603 5.05546 19.9445C4.53973 19.4288 4.25 18.7293 4.25 18V6C4.25 5.27065 4.53973 4.57118 5.05546 4.05546C5.57118 3.53973 6.27065 3.25 7 3.25H14.5C14.6988 3.25018 14.8895 3.32931 15.03 3.47L19.53 8C19.6707 8.14052 19.7498 8.33115 19.75 8.53V18C19.75 18.7293 19.4603 19.4288 18.9445 19.9445C18.4288 20.4603 17.7293 20.75 17 20.75ZM7 4.75C6.66848 4.75 6.35054 4.8817 6.11612 5.11612C5.8817 5.35054 5.75 5.66848 5.75 6V18C5.75 18.3315 5.8817 18.6495 6.11612 18.8839C6.35054 19.1183 6.66848 19.25 7 19.25H17C17.3315 19.25 17.6495 19.1183 17.8839 18.8839C18.1183 18.6495 18.25 18.3315 18.25 18V8.81L14.19 4.75H7Z" fill="#ffffff" />
                            <path d="M16.75 20H15.25V13.75H8.75V20H7.25V13.5C7.25 13.1685 7.3817 12.8505 7.61612 12.6161C7.85054 12.3817 8.16848 12.25 8.5 12.25H15.5C15.8315 12.25 16.1495 12.3817 16.3839 12.6161C16.6183 12.8505 16.75 13.1685 16.75 13.5V20Z" fill="#ffffff" />
                            <path d="M12.47 8.75H8.53001C8.3606 8.74869 8.19311 8.71403 8.0371 8.64799C7.88109 8.58195 7.73962 8.48582 7.62076 8.36511C7.5019 8.24439 7.40798 8.10144 7.34437 7.94443C7.28075 7.78741 7.24869 7.61941 7.25001 7.45V4H8.75001V7.25H12.25V4H13.75V7.45C13.7513 7.61941 13.7193 7.78741 13.6557 7.94443C13.592 8.10144 13.4981 8.24439 13.3793 8.36511C13.2604 8.48582 13.1189 8.58195 12.9629 8.64799C12.8069 8.71403 12.6394 8.74869 12.47 8.75Z" fill="#ffffff" />
                        </svg>&nbsp; {{ __('translate.update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addnewSlugsModal" tabindex="-1" aria-labelledby="addnewSlugsModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addnewSlugsModalLabel">{{ __('translate.new') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form wire:submit.prevent="saveSlug">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-auto">
                                    <label for="slug" class="col-form-label">{{ __('translate.name') }}</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="name" wire:model="name" class="form-control">
                                </div>
                                @error('name') <span class="text-danger">{{ __('translate.error_name') }}</span> @enderror

                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-auto">
                                    <label for="slug" class="col-form-label">{{ __('translate.slug') }}</label>
                                </div>
                                <div class="col-auto ml-3">
                                    <input type="text" id="slug" wire:model="slug" class="form-control" aria-describedby="passwordHelpInline" placeholder="{{ __('translate.slug') }}">
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-success" wire:click="rand" style="margin-bottom: 0;">
                                        {{ __('translate.generate') }}
                                    </button>
                                </div>
                                @error('slug')
                                <span class="text-danger">{{ __('translate.error_slug') }}</span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label>{{ __('translate.code') }}</label>
                                <input type="text" wire:model="code" class="form-control" placeholder="{{ __('translate.analytics_code') }}">
                                @error('code')
                                <span class="text-danger">{{ __('translate.error_name') }}</span>
                                @enderror
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

<!-- Update Slugs Modal -->