<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="tracking-wide text-white fw-semibold" href="/">
                <span class="smini-visible">
                    D<span class="opacity-75">x</span>
                </span>
                <span class="smini-hidden">
                    Dash<span class="opacity-75">mix</span>
                </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                    onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>
                <!-- END Toggle Sidebar Style -->

                <!-- Dark Mode -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>
                <!-- END Dark Mode -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('/') ? ' active' : '' }}" href="/">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                        <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span>
                    </a>
                </li>
                <li class="nav-main-heading">Кредитование</li>

                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}"
                        href="{{ route('creditfiz.create') }}">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Физическое лицо</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}" href="{{ route('credityur.create') }}">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Юридический лицо</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Добавление Ссуды</span>
                    </a>
                </li>
                <li class="nav-main-heading">Отчетност</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/">
                        <i class="nav-main-link-icon fa fa-globe"></i>
                        <span class="nav-main-link-name">Landing</span>
                    </a>
                </li>
                <li class="nav-main-heading">Конфигурация</li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
