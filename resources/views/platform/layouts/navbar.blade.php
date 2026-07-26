<header class="app-header navbar navbar-expand bg-body">

    {{-- ========================================================= --}}
    {{-- LEFT SIDE --}}
    {{-- ========================================================= --}}

    <div class="container-fluid">


        {{-- Sidebar Toggle --}}

        <ul class="navbar-nav">

            <li class="nav-item">

                <a
                    class="nav-link"
                    href="#"
                    data-lte-toggle="sidebar"
                    role="button"
                >

                    <i class="fas fa-bars"></i>

                </a>

            </li>

        </ul>


        {{-- Search --}}

        <form class="d-none d-md-flex ms-3">

            <div class="input-group">

                <input
                    type="search"
                    class="form-control"
                    placeholder="Search..."
                    aria-label="Search"
                >

                <button
                    type="submit"
                    class="btn btn-outline-secondary"
                >

                    <i class="fas fa-search"></i>

                </button>

            </div>

        </form>


        {{-- ========================================================= --}}
        {{-- RIGHT SIDE --}}
        {{-- ========================================================= --}}

        <ul class="navbar-nav ms-auto">


            {{-- Notifications --}}

            <li class="nav-item dropdown">

                <a
                    class="nav-link"
                    href="#"
                    data-bs-toggle="dropdown"
                    role="button"
                    aria-expanded="false"
                >

                    <i class="far fa-bell"></i>

                    <span class="badge text-bg-danger navbar-badge">

                        3

                    </span>

                </a>


                <div
                    class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                >

                    <span class="dropdown-header">

                        3 Notifications

                    </span>


                    <div class="dropdown-divider"></div>


                    <a
                        href="#"
                        class="dropdown-item"
                    >

                        <i class="fas fa-school me-2"></i>

                        New school registration

                        <span class="float-end text-muted text-sm">

                            5 min

                        </span>

                    </a>


                    <div class="dropdown-divider"></div>


                    <a
                        href="#"
                        class="dropdown-item"
                    >

                        <i class="fas fa-user-plus me-2"></i>

                        New employee added

                        <span class="float-end text-muted text-sm">

                            1 hour

                        </span>

                    </a>


                    <div class="dropdown-divider"></div>


                    <a
                        href="#"
                        class="dropdown-item"
                    >

                        <i class="fas fa-info-circle me-2"></i>

                        System update

                        <span class="float-end text-muted text-sm">

                            2 hours

                        </span>

                    </a>


                </div>

            </li>


            {{-- ========================================================= --}}
            {{-- USER MENU --}}
            {{-- ========================================================= --}}

            <li class="nav-item dropdown">


                <a
                    class="nav-link"
                    href="#"
                    data-bs-toggle="dropdown"
                    role="button"
                    aria-expanded="false"
                >

                    <div class="d-flex align-items-center">


                        {{-- Avatar --}}

                        <span class="user-avatar me-2">

                            {{ strtoupper(
                                substr(
                                    auth('platform')->user()->name ?? 'A',
                                    0,
                                    1
                                )
                            ) }}

                        </span>


                        {{-- Name --}}

                        <span class="d-none d-md-inline">

                            {{ auth('platform')->user()->name ?? 'Administrator' }}

                        </span>


                        <i class="fas fa-chevron-down ms-2 small"></i>


                    </div>

                </a>


                {{-- User Dropdown --}}

                <div class="dropdown-menu dropdown-menu-end">


                    <a
                        href="#"
                        class="dropdown-item"
                    >

                        <i class="fas fa-user me-2"></i>

                        My Profile

                    </a>


                    <a
                        href="#"
                        class="dropdown-item"
                    >

                        <i class="fas fa-cog me-2"></i>

                        Settings

                    </a>


                    <div class="dropdown-divider"></div>


                    {{-- Logout --}}

                    <form
                        method="POST"
                        action="{{ route('platform.logout') }}"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="dropdown-item"
                        >

                            <i class="fas fa-sign-out-alt me-2"></i>

                            Logout

                        </button>

                    </form>


                </div>


            </li>


        </ul>


    </div>

</header>