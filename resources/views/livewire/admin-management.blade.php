<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <x-loading-indicator />
    <div class="row">
        @include('livewire.modal.admin_modal')
        @include('livewire.modal.info_modal')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 col-xl-4 mb-2">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">{{ __('translate.page_manager') }} {{ __('translate.list') }}</h6>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder">{{ __('translate.navbar') }}
                            </h6>
                            <ul class="list-group">
                                @if (isset($sidebarData))
                                    @foreach ($sidebarData as $r_sidebar)
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <label class="form-check-label text-body text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault">
                                                    @switch($r_sidebar->id)
                                                        @case(1)
                                                            {{ __('translate.banner') }}
                                                            <button data-bs-toggle="modal" data-bs-target="#infoModal"
                                                                wire:click="editSidebar({{ $r_sidebar->id }})">
                                                                <i class="fa fa-info-circle text-secondary text-sm"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" aria-hidden="true"
                                                                    data-bs-original-title="Developers Information"></i><span
                                                                    class="sr-only">Edit Profile</span>
                                                            </button>
                                                        @break

                                                        @case(2)
                                                            {{ __('translate.links_management') }}
                                                            <button data-bs-toggle="modal" data-bs-target="#infoModal"
                                                                wire:click="editSidebar({{ $r_sidebar->id }})">
                                                                <i class="fa fa-info-circle text-secondary text-sm"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" aria-hidden="true"
                                                                    data-bs-original-title="Developers Information"></i><span
                                                                    class="sr-only">Edit Profile</span>
                                                            </button>
                                                        @break

                                                        @case(3)
                                                            {{ __('translate.buttons') }}
                                                            <button data-bs-toggle="modal" data-bs-target="#infoModal"
                                                                wire:click="editSidebar({{ $r_sidebar->id }})">
                                                                <i class="fa fa-info-circle text-secondary text-sm"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" aria-hidden="true"
                                                                    data-bs-original-title="Developers Information"></i><span
                                                                    class="sr-only">Edit Profile</span>
                                                            </button>
                                                        @break

                                                        @case(4)
                                                            Slug
                                                            <button data-bs-toggle="modal" data-bs-target="#infoModal"
                                                                wire:click="editSidebar({{ $r_sidebar->id }})">
                                                                <i class="fa fa-info-circle text-secondary text-sm"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" aria-hidden="true"
                                                                    data-bs-original-title="Developers Information"></i><span
                                                                    class="sr-only">Edit Profile</span>
                                                            </button>
                                                        @break

                                                        @default
                                                            {{ __('translate.buttons') }}
                                                            <button data-bs-toggle="modal" data-bs-target="#infoModal"
                                                                wire:click="editSidebar({{ $r_sidebar->id }})">
                                                                <i class="fa fa-info-circle text-secondary text-sm"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" aria-hidden="true"
                                                                    data-bs-original-title="Developers Information"></i><span
                                                                    class="sr-only">Edit Profile</span>
                                                            </button>
                                                    @endswitch
                                                </label>
                                                <input data-id="{{ $r_sidebar->id }}"
                                                    class="form-check-input ms-auto toggle-class" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive"
                                                    {{ $r_sidebar->status ? 'checked' : '' }}
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-8">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">{{ __('translate.admin_information') }}</h6>
                                </div>
                                <div class="col-md-4 text-right">
                                    <button data-bs-toggle="modal" data-bs-target="#updateAdminModal"
                                        wire:click="editAdmin({{ $admin->id }})">
                                        <svg class="feather feather-edit" fill="none" height="24"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                        </svg>
                                        <!-- <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit" aria-label="Edit Profile"></i> -->
                                        <span class="sr-only">Edit Profile</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                {{ __('translate.admin_details') }}
                            </p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <li
                                            class="list-group-item border-0 ps-0 text-sm w-50 d-flex align-items-center">
                                            <strong class="text-dark">{{ __('translate.logo') }}:</strong>
                                            &nbsp; <img class="logo ml-3"
                                                src="{{ asset('storage/' . $admin->logo) }}" alt="">
                                        </li>
                                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                class="text-dark">{{ __('translate.title') }}
                                                :</strong> &nbsp; {{ $admin->title }}</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">{{ __('translate.link') }}:</strong>
                                            &nbsp; {{ $admin->link }}</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">{{ __('translate.information') }}:</strong>
                                            &nbsp; {{ $admin->info }}</li>
                                    </div>
                                    <div class="col-md-6">
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">{{ __('translate.webpage') }}: </strong>
                                            &nbsp; <img class="logo"
                                                src="{{ asset('storage/' . $admin->webimage) }}" alt=""></li>
                                    </div>
                                </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!--   Core JS Files   -->
<script src="/assets/js/plugins/chartjs.min.js"></script>
<script src="/assets/js/plugins/Chart.extension.js"></script>
