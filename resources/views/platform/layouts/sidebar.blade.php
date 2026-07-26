<aside
    class="app-sidebar bg-dark shadow"
    data-bs-theme="dark"
>


    {{-- ========================================================= --}}
    {{-- BRAND --}}
    {{-- ========================================================= --}}

    <div class="sidebar-brand">


        <a
            href="{{ route('platform.dashboard') }}"
            class="brand-link"
        >


            <span class="brand-text fw-light">

                <strong>School</strong>Hub

            </span>


        </a>


    </div>


    {{-- ========================================================= --}}
    {{-- SIDEBAR --}}
    {{-- ========================================================= --}}

    <div class="sidebar-wrapper">


        <nav class="mt-2">


            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false"
            >


                {{-- ================================================= --}}
                {{-- DASHBOARD --}}
                {{-- ================================================= --}}

                <li class="nav-item">

                    <a
                        href="{{ route('platform.dashboard') }}"
                        class="nav-link
                        {{ request()->routeIs('platform.dashboard')
                            ? 'active'
                            : '' }}"
                    >

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>

                            Dashboard

                        </p>

                    </a>

                </li>


                {{-- ================================================= --}}
                {{-- SCHOOLS --}}
                {{-- ================================================= --}}

                <li class="nav-item">


                    <a
                        href="#"
                        class="nav-link"
                    >

                        <i class="nav-icon fas fa-school"></i>

                        <p>

                            Schools

                            <i class="nav-arrow fas fa-angle-right"></i>

                        </p>

                    </a>


                    <ul class="nav nav-treeview">


                        {{-- All Schools --}}

                        <li class="nav-item">


                            <a
                                href="{{ route('platform.schools.index') }}"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    All Schools

                                </p>

                            </a>


                        </li>


                        {{-- Add School --}}

                        <li class="nav-item">


                            <a
                                href="{{ route('platform.schools.create') }}"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    Add School

                                </p>

                            </a>


                        </li>


                        {{-- School Requests --}}

                        <li class="nav-item">


                            <a
                                href="#"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    Onboarding Requests

                                </p>

                            </a>


                        </li>


                    </ul>


                </li>


                {{-- ================================================= --}}
                {{-- EMPLOYEES --}}
                {{-- ================================================= --}}

                <li class="nav-item">


                    <a
                        href="#"
                        class="nav-link"
                    >

                        <i class="nav-icon fas fa-users"></i>

                        <p>

                            Platform Employees

                            <i class="nav-arrow fas fa-angle-right"></i>

                        </p>

                    </a>


                    <ul class="nav nav-treeview">


                        <li class="nav-item">

                            <a
                                href="#"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    All Employees

                                </p>

                            </a>

                        </li>


                        <li class="nav-item">

                            <a
                                href="#"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    Add Employee

                                </p>

                            </a>

                        </li>


                    </ul>


                </li>


                {{-- ================================================= --}}
                {{-- ACCESS CONTROL --}}
                {{-- ================================================= --}}

                <li class="nav-item">


                    <a
                        href="#"
                        class="nav-link"
                    >

                        <i class="nav-icon fas fa-user-shield"></i>

                        <p>

                            Access Control

                            <i class="nav-arrow fas fa-angle-right"></i>

                        </p>

                    </a>


                    <ul class="nav nav-treeview">


                        <li class="nav-item">

                            <a
                                href="#"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    Roles

                                </p>

                            </a>

                        </li>


                        <li class="nav-item">

                            <a
                                href="#"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    Permissions

                                </p>

                            </a>

                        </li>


                    </ul>


                </li>


                {{-- ================================================= --}}
                {{-- LOCATIONS --}}
                {{-- ================================================= --}}

                <li class="nav-item">


                    <a
                        href="#"
                        class="nav-link"
                    >

                        <i class="nav-icon fas fa-map-marker-alt"></i>

                        <p>

                            Locations

                            <i class="nav-arrow fas fa-angle-right"></i>

                        </p>

                    </a>


                    <ul class="nav nav-treeview">


                        <li class="nav-item">

                            <a
                                href="#"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    Countries

                                </p>

                            </a>

                        </li>


                        <li class="nav-item">

                            <a
                                href="#"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    States

                                </p>

                            </a>

                        </li>


                        <li class="nav-item">

                            <a
                                href="#"
                                class="nav-link"
                            >

                                <i class="nav-icon far fa-circle"></i>

                                <p>

                                    Cities

                                </p>

                            </a>

                        </li>


                    </ul>


                </li>


                {{-- ================================================= --}}
                {{-- SETTINGS --}}
                {{-- ================================================= --}}

                <li class="nav-header">

                    SYSTEM

                </li>


                <li class="nav-item">


                    <a
                        href="#"
                        class="nav-link"
                    >

                        <i class="nav-icon fas fa-cog"></i>

                        <p>

                            Settings

                        </p>

                    </a>


                </li>


            </ul>


        </nav>


    </div>


</aside>