<nav class="navbar fixed-top navbar-expand-lg bg-white shadow-sm" data-bs-theme="light">
    <div class="container py-2 px-4">
        <a href="#" class="navbar-brand mb-0">
            <i class="bi bi-display me-2"></i> Re-Bot Dashboard
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end bg-gray" id="offcanvasNavbar">
            <div class="offcanvas-header pb-0 px-4">
                <h5 class="offcanvas-title text-dark" id="offcanvasNavbarLabel">Re-Bot Dashboard</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body pt-0 px-4">
                <hr class="d-lg-none text-dark-50">

                <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <li class="nav-item col-12 col-lg-auto">
                        <a href="#" class="nav-link active">
                            <i class="bi bi-whatsapp"></i><small class="ms-2">Our Contact: 0812-3456-7891</small>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-lg-auto">
                        <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                        <hr class="d-lg-none my-2 text-dark-50">
                    </li>
                    <li class="nav-item">
                        <div class="dropdown" data-bs-theme="light">
                            <button type="button" class="btn nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle me-2"></i><span>Administrator</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <button class="dropdown-item" type="button">
                                        <small><i class="bi bi-person-badge me-2"></i>Profile</small>
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" type="button">
                                        <small><i class="bi bi-gear me-2"></i>Settings</small>
                                    </button>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a href="{{ route('login') }}" class="dropdown-item" type="button">
                                        <small><i class="bi bi-lock-fill me-2"></i></i>Log Out</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
