@php
  $current_user = \Illuminate\Support\Facades\Auth::guard('admin')->user();
@endphp

<!--start top header-->
<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>

        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">

                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            @if(!empty($current_user->image))
                            <img src="{{ asset('public/uploads/admin/'.$current_user->image) }}" class="user-img" alt="">
                            @else
                                <img src="{{ asset('public/default/profile.png') }}" class="user-img" alt="">
                                @endif
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    @if(!empty($current_user->image))
                                    <img src="{{ asset('public/uploads/admin/'.$current_user->image) }}" alt="" class="rounded-circle" width="54" height="54">
                                    @else
                                        <img src="{{ asset('public/default/profile.png') }}" alt="" class="rounded-circle" width="54" height="54">
                                    @endif
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">{{ $current_user->name }}</h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary">Administrator</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('adminProfile') }}">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('changePassword') }}">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-gear-fill"></i></div>
                                    <div class="ms-3"><span>Change Password</span></div>
                                </div>
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('adminLogout') }}">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!--end top header-->
