<!doctype html>
<html lang="zxx">

<!-- Mirrored from baston.laborasyon.com/demos/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 01:54:00 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baston - Responsive Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="../../vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Slick -->
    <link rel="stylesheet" href="../../vendors/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="../../vendors/slick/slick-theme.css" type="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="../../vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="../../vendors/dataTable/datatables.min.css" type="text/css">

<!-- App css -->
    <link rel="stylesheet" href="../../assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
    <img class="dark-logo" src="../../assets/media/image/logo/dark-logo.png" alt="logo dark">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
<div class="sidebar-group">
    <!-- Sidebar >>> Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Settings -->

    <!-- Sidebar >>> Chat list -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h6 class="card-title mb-0">Chats</h6>
                    <a href="chat.html" class="btn btn-primary btn-sm">New Chat</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Francisco Ubsdale</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="../../assets/media/image/user/women_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="../../assets/media/image/user/man_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Chat list -->
</div>
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">
    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <ul class="navbar-nav">
                    <li class="nav-item navigation-toggler">
                        <a href="#" class="nav-link">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="header-search-form">
                            <form class="d-flex">
                                <button class="btn">
                                    <i class="ti-search"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-right">
                <ul class="navbar-nav">
                    <li class="nav-item btn-mobile-search">
                        <a href="#" title="Search" class="nav-link">
                            <i data-feather="search"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown d-sm-inline d-none">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Notifications" data-toggle="dropdown">
                            <span class="badge badge-danger nav-link-notify">1</span>
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div
                                class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Notifications</h6>
                                <small class="opacity-7">1 unread notifications</small>
                            </div>
                            <div class="dropdown-scroll">
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <span
                                                        class="avatar-title bg-success-bright text-success rounded-circle">
                                                        <i class="ti-file"></i>
                                                    </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Your report is prepared
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item bg-primary-bright px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New customer registered
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New Order Recieved
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">45 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Server Limit Reached!
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">55 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Apps are ready for update
                                                    <i title="" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"
                                                       data-original-title="Mark as unread"></i>
                                                </p>
                                                <span class="text-muted small">Yesterday</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-3 py-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="chat.html" title="Chat" class="nav-link">
                            <span class="badge badge-danger nav-link-notify">4</span>
                            <i data-feather="message-circle"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                            <i data-feather="shopping-bag"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div
                                class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Cart</h6>
                                <small class="opacity-7">4 products</small>
                            </div>
                            <div class="dropdown-scroll">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product6.png" class="rounded"
                                                     alt="Flowerpot">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Flowerpot
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $1,200</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product3.png" class="rounded"
                                                     alt="Plate">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Plate
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $250</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product7.png"
                                                     class="rounded" alt="Wall Clock">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Wall Clock
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $100</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product1.png" class="rounded"
                                                     alt="Vase">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Vase
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $1,200</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product2.png" class="rounded"
                                                     alt="Glasses">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Glasses
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $200</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-3 py-2 border-top text-right">
                                <p class="d-flex justify-content-between align-items-center mb-1 small">
                                    <span>Sub Total</span>
                                    <span>$1,650</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-1 small">
                                    <span>Taxes</span>
                                    <span>$15</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-1 small font-weight-bold">
                                    <span>Total</span>
                                    <span>$1,675</span>
                                </p>
                                <button class="btn btn-primary btn-block mt-2">
                                    Order and Payment <i class="ti-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                            <span class="mr-2 d-sm-inline d-none">
                                Hi! <strong>Bony Gidden</strong>
                            </span>
                            <figure class="avatar avatar-sm">
                                <img src="../../assets/media/image/user/man_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="text-center py-4"
                                 data-background-image="../../assets/media/image/image1.jpg">
                                <figure class="avatar avatar-lg mb-3 border-0">
                                    <img src="../../assets/media/image/user/man_avatar3.jpg"
                                         class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="mb-0">Bony Gidden</h5>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="profile.html" class="list-group-item">Profile</a>
                                <a href="#" class="list-group-item" data-sidebar-target="#settings">Settings</a>
                                <a href="login.html" class="list-group-item text-danger">Sign Out!</a>
                            </div>
                            <div class="pb-0 p-4">
                                <div class="mb-4">
                                    <h6 class="d-flex justify-content-between">
                                        Completed Tasks
                                        <span class="float-right">%68</span>
                                    </h6>
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar bg-secondary" role="progressbar"
                                             style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="d-flex justify-content-between">
                                        Storage
                                        <span>%25</span>
                                    </h6>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%;"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i class="ti-arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Navigation -->
        <div class="navigation">
            <!-- Logo -->
            <div class="navigation-header">
                <a class="navigation-logo" href=index-2.html>
                    <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
                    <img class="dark-logo" src="../../assets/media/image/logo/dark-logo.png" alt="dark logo">
                    <img class="small-logo" src="../../assets/media/image/logo/small-logo.png" alt="small logo">
                    <img class="small-dark-logo" src="../../assets/media/image/logo/small-dark-logo.png" alt="small dark logo">
                </a>
                <a href="#" class="small-navigation-toggler"></a>
                <a href="#" class="btn btn-danger mobile-navigation-toggler">
                    <i class="ti-close"></i>
                </a>
            </div>
            <!-- ./ Logo -->

            <!-- Menu wrapper -->
            <div class="navigation-menu-wrapper">
                <!-- Menu tab -->
                <div class="navigation-menu-tab">
                    <ul>
                        <li>
                            <a href="#" data-menu-target="#dashboards">
                                <span class="menu-tab-icon">
                                    <i data-feather="pie-chart"></i>
                                </span>
                                <span>Dashboards</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#apps">
                                <span class="menu-tab-icon">
                                    <i data-feather="globe"></i>
                                </span>
                                <span>Apps</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#components">
                                <span class="menu-tab-icon">
                                    <i data-feather="layers"></i>
                                </span>
                                <span>Components</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#forms">
                                <span class="menu-tab-icon">
                                    <i data-feather="mouse-pointer"></i>
                                </span>
                                <span>Forms</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#plugins">
                                <span class="menu-tab-icon">
                                    <i data-feather="gift"></i>
                                </span>
                                <span>Plugins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#pages">
                                <span class="menu-tab-icon">
                                    <i data-feather="copy"></i>
                                </span>
                                <span>Pages</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#other">
                                <span class="menu-tab-icon">
                                    <i data-feather="arrow-up-right"></i>
                                </span>
                                <span>Other</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu tab -->

                <!-- Menu body -->
                <div class="navigation-menu-body">
                    <ul id="dashboards">
                        <li class="navigation-divider">Dashboards</li>
                        <li>
                            <a  class="active"
                                href="ecommerce-dashboard.html">
                                <span class="nav-link-icon" data-feather="shopping-cart"></span>
                                <span>E-commerce</span>
                            </a>
                        </li>
                        <li>
                            <a  href="analytics-dashboard.html">
                                <span class="nav-link-icon" data-feather="bar-chart-2"></span>
                                <span>Analytics</span>
                                <span class="badge badge-success">New</span>
                            </a>
                        </li>
                        <li>
                            <a  href="helpdesk-dashboard.html">
                                <span class="nav-link-icon" data-feather="life-buoy"></span>
                                <span>Helpdesk</span>
                            </a>
                        </li>
                        <li class="navigation-divider">E-commerce Pages</li>
                        <li>
                            <a  href="orders.html">
                                <span class="nav-link-icon" data-feather="box"></span>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-list.html">
                                <span class="nav-link-icon" data-feather="list"></span>
                                <span>Product List</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-grid.html">
                                <span class="nav-link-icon" data-feather="grid"></span>
                                <span>Product Grid</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-detail.html">
                                <span class="nav-link-icon" data-feather="file-text"></span>
                                <span>Product Detail</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="apps">
                        <li class="navigation-divider">Apps</li>
                        <li>
                            <a  href="chat.html">
                                <span class="nav-link-icon" data-feather="message-circle"></span>
                                <span>Chat</span>
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                        <li>
                            <a  href="mail.html">
                                <span class="nav-link-icon" data-feather="mail"></span>
                                <span>Mail</span>
                            </a>
                        </li>
                        <li>
                            <a  href="todo-list.html">
                                <span class="nav-link-icon" data-feather="check-circle"></span>
                                <span>Todo List</span>
                                <span class="badge badge-warning small-badge">2</span>
                            </a>
                        </li>
                        <li>
                            <a  href="file-manager.html">
                                <span class="nav-link-icon" data-feather="file"></span>
                                <span>File Manager</span>
                            </a>
                        </li>
                        <li>
                            <a  href="calendar.html">
                                <span class="nav-link-icon" data-feather="calendar"></span>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a  href="gallery.html">
                                <span class="nav-link-icon" data-feather="image"></span>
                                <span>Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a  href="invoice.html">
                                <span class="nav-link-icon" data-feather="book"></span>
                                <span>Invoice</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="components">
                        <li class="navigation-divider">Components</li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="layers"></i>
                                </span>
                                <span>Basic Components</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="alert.html">Alerts</a></li>
                                <li>
                                    <a  href="accordion.html">Accordion</a></li>
                                <li>
                                    <a  href="buttons.html">Buttons</a></li>
                                <li>
                                    <a  href="dropdown.html">Dropdown</a></li>
                                <li>
                                    <a  href="list-group.html">List Group</a></li>
                                <li>
                                    <a  href="pagination.html">Pagination</a></li>
                                <li>
                                    <a  href="typography.html">Typography</a></li>
                                <li>
                                    <a  href="media-object.html">Media Object</a>
                                </li>
                                <li>
                                    <a  href="progress.html">Progress</a></li>
                                <li>
                                    <a  href="modal.html">Modal</a></li>
                                <li>
                                    <a  href="spinners.html">Spinners</a></li>
                                <li>
                                    <a  href="navs.html">Navs</a></li>
                                <li>
                                    <a  href="tab.html">Tab</a></li>
                                <li>
                                    <a  href="tooltip.html">Tooltip</a></li>
                                <li>
                                    <a  href="popovers.html">Popovers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="square"></i>
                                </span>
                                <span>Cards</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="basic-cards.html">Basic Cards </a></li>
                                <li>
                                    <a  href="image-cards.html">Image Cards </a></li>
                                <li>
                                    <a  href="scrollable-cards.html">Scrollable Cards</a></li>
                                <li>
                                    <a  href="other-cards.html">Others Cards</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="grid"></i>
                                </span>
                                <span>Tables</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="basic-tables.html">Basic Tables</a></li>
                                <li>
                                    <a  href="dataTable.html">Datatable</a></li>
                                <li>
                                    <a  href="responsive-tables.html">Responsive Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a  href="avatar.html">
                                <span class="nav-link-icon">
                                    <i data-feather="aperture"></i>
                                </span>
                                <span>Avatar</span>
                            </a>
                        </li>
                        <li>
                            <a  href="icons.html">
                                <span class="nav-link-icon">
                                    <i data-feather="anchor"></i>
                                </span>
                                <span>Icons</span>
                            </a>
                        </li>
                        <li>
                            <a  href="colors.html">
                                <span class="nav-link-icon">
                                    <i data-feather="droplet"></i>
                                </span>
                                <span>Colors</span>
                            </a>
                        </li>
                        <li>
                            <a  href="divider.html">
                                <span class="nav-link-icon">
                                    <i data-feather="git-commit"></i>
                                </span>
                                <span>Divider</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="forms">
                        <li class="navigation-divider">Forms</li>
                        <li>
                            <a  href="basic-forms.html">
                                <span class="nav-link-icon" data-feather="book"></span>
                                <span>Basic Forms</span>
                            </a>
                        </li>
                        <li>
                            <a  href="custom-forms.html">
                                <span class="nav-link-icon" data-feather="disc"></span>
                                <span>Custom Forms</span>
                            </a>
                        </li>
                        <li>
                            <a  href="advanced-forms.html">
                                <span class="nav-link-icon" data-feather="framer"></span>
                                <span>Advanced Forms</span>
                            </a>
                        </li>
                        <li>
                            <a  href="form-validation.html">
                                <span class="nav-link-icon" data-feather="toggle-left"></span>
                                <span>Form Validation</span>
                            </a>
                        </li>
                        <li>
                            <a  href="form-wizard.html">
                                <span class="nav-link-icon" data-feather="sliders"></span>
                                <span>Form Wizard</span>
                            </a>
                        </li>
                        <li>
                            <a  href="form-repeater.html">
                                <span class="nav-link-icon" data-feather="repeat"></span>
                                <span>Form Repeater</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="plugins">
                        <li class="navigation-divider">Plugins</li>
                        <li>
                            <a  href="sweet-alert.html">
                                <span class="nav-link-icon" data-feather="alert-triangle"></span>
                                <span>Sweet Alert</span>
                            </a>
                        </li>
                        <li>
                            <a  href="lightbox.html">
                                <span class="nav-link-icon" data-feather="crop"></span>
                                <span>Lightbox</span>
                            </a>
                        </li>
                        <li>
                            <a  href="toast.html">
                                <span class="nav-link-icon" data-feather="clipboard"></span>
                                <span>Toast</span>
                            </a>
                        </li>
                        <li>
                            <a  href="tour.html">
                                <span class="nav-link-icon" data-feather="sliders"></span>
                                <span>Tour</span>
                            </a>
                        </li>
                        <li>
                            <a  href="slick-slide.html">
                                <span class="nav-link-icon" data-feather="layers"></span>
                                <span>Slick Slide</span>
                            </a>
                        </li>
                        <li>
                            <a  href="nestable.html">
                                <span class="nav-link-icon" data-feather="align-right"></span>
                                <span>Nestable</span>
                            </a>
                        </li>
                        <li>
                            <a  href="file-upload.html">
                                <span class="nav-link-icon" data-feather="upload-cloud"></span>
                                <span>File Upload</span>
                            </a>
                        </li>
                        <li>
                            <a  href="datepicker.html">
                                <span class="nav-link-icon" data-feather="calendar"></span>
                                <span>Datepicker</span>
                            </a>
                        </li>
                        <li>
                            <a  href="timepicker.html">
                                <span class="nav-link-icon" data-feather="clock"></span>
                                <span>Timepicker</span>
                            </a>
                        </li>
                        <li>
                            <a href="colorpicker.html">
                                <span class="nav-link-icon" data-feather="eye"></span>
                                <span>Colorpicker</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon" data-feather="activity"></span>
                                <span>Charts</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="apexchart.html">Apex Chart</a>
                                </li>
                                <li>
                                    <a  href="justgage.html">Justgage</a>
                                </li>
                                <li>
                                    <a  href="peity.html">Peity</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="map-pin"></i>
                                </span>
                                <span>Maps</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="google-map.html">Google Map</a>
                                </li>
                                <li>
                                    <a  href="vector-map.html">Vector Map</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="pages">
                        <li class="navigation-divider">Pages</li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon" data-feather="users"></span>
                                <span>User Pages</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="profile.html">Profile</a></li>
                                <li>
                                    <a  href="user-list.html">User List</a></li>
                                <li>
                                    <a  href="user-edit.html">User Edit</a></li>
                                <li><a href="login.html" target="_blank">Login</a></li>
                                <li><a href="register.html" target="_blank">Register</a></li>
                                <li><a href="recovery-password.html" target="_blank">Recovery Password</a>
                                </li>
                                <li><a href="lock-screen.html" target="_blank">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li>
                            <a  href="timeline.html">
                                <span class="nav-link-icon" data-feather="hash"></span>
                                <span>Timeline</span>
                            </a>
                        </li>
                        <li>
                            <a  href="pricing-table.html">
                                <span class="nav-link-icon" data-feather="dollar-sign"></span>
                                <span>Pricing Table</span>
                            </a>
                        </li>
                        <li>
                            <a  href="search-result.html">
                                <span class="nav-link-icon" data-feather="search"></span>
                                <span>Search Result</span>
                            </a>
                        </>
                        <li>
                            <a  href="blank-page.html">
                                <span class="nav-link-icon" data-feather="layout"></span>
                                <span>Blank Page</span>

                            </a>
                        </li>
                        <li></li>
                        <li>
                            <a href="404.html" target="_blank">
                                <span class="nav-link-icon" data-feather="frown"></span>
                                <span>404</span>
                            </a>
                        </li>
                        <li>
                            <a href="503.html" target="_blank">
                                <span class="nav-link-icon" data-feather="frown"></span>
                                <span>503</span>
                            </a>
                        </li>
                        <li>
                            <a href="mean-at-work.html" target="_blank">
                                <span class="nav-link-icon" data-feather="tool"></span>
                                <span>Mean at Work</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="other">
                        <li class="navigation-divider">Other</li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="mail"></i>
                                </span>
                                <span>Email Templates</span>
                            </a>
                            <ul>
                                <li><a target="_blank" href="email-template-basic.html">Basic</a></li>
                                <li><a target="_blank" href="email-template-alert.html">Alert</a></li>
                                <li><a target="_blank" href="email-template-billing.html">Billing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="menu"></i>
                                </span>
                                <span>Menu Level</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Menu Level</a>
                                    <ul>
                                        <li>
                                            <a href="#">Menu Level </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu body -->
            </div>
            <!-- ./ Menu wrapper -->
        </div>
        <!-- ./ Navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                
    <div class="page-header">
        <div class="page-title">
            <h3>E-commerce Dashboard</h3>
            <div>
                <div id="ecommerce-dashboard-daterangepicker" class="btn btn-outline-light">
                    <i class="ti-calendar mr-2 text-muted"></i>
                    <span></span>
                </div>
                <a href="#" class="btn btn-primary ml-2" data-toggle="dropdown">
                    <i class="ti-download"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Download</a>
                    <a href="#" class="dropdown-item">Print</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="card-title mb-3">Weekly Average New Sales</h6>
                            <h1>$1,720</h1>
                        </div>
                        <div class="d-flex">
                            <div class="icon-block icon-block-floating bg-danger mr-2">
                                <i class="ti-arrow-up"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <small class="text-muted">Last 7 Days</small>
                                <div class="text-danger">+52,50%</div>
                            </div>
                        </div>
                    </div>
                    <div id="sales"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title mb-2">Monthly Sales</h6>
                        <div>
                            <a href="#" class="btn btn-outline-light btn-sm btn-floating mr-2">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown"
                                   class="btn btn-outline-light btn-sm btn-floating"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="small text-muted">Avarage total sales +25,5%</p>
                    <div id="monthly-sales"></div>
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <i class="fa fa-circle mr-1 text-success"></i> Bank Card <br>
                            <small class="text-muted">25,45% over</small>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-circle mr-1 text-primary"></i> Credit Card <br>
                            <small class="text-muted">75,55% over</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        Sales
                        <small class="text-muted">Last 30 days</small>
                    </h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-3">25,400</h2>
                            <small class="text-success">
                                <i class="ti-angle-up mr-1"></i>
                                2.00%
                            </small>
                        </div>
                        <div
                            class="icon-block icon-block-xl icon-block-floating bg-secondary opacity-7">
                            <i class="ti-bar-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        Orders
                        <small class="text-muted">Last 30 days</small>
                    </h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-3">62,033</h2>
                            <small class="text-danger">
                                <i class="ti-angle-down mr-1"></i>
                                1.59%
                            </small>
                        </div>
                        <div class="icon-block icon-block-xl icon-block-floating bg-success opacity-7">
                            <i class="ti-package"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        Customers
                        <small class="text-muted">Last 30 days</small>
                    </h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-3">34,518</h2>
                            <small class="text-success">
                                <i class="ti-angle-up mr-1"></i>
                                2.07%
                            </small>
                        </div>
                        <div class="icon-block icon-block-xl icon-block-floating bg-warning opacity-7">
                            <i class="ti-user"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h6 class="card-title mb-0">Recent Orders</h6>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-lg">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product1.png"
                                 class="rounded mr-3" alt="Vase">
                            <span>Vase</span>
                        </a>
                    </td>
                    <td>Dollie Bullock</td>
                    <td>$230</td>
                    <td>
                        <span class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                    </td>
                    <td>2020/02/28</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product2.png"
                                 class="rounded mr-3" alt="Glasses">
                            <span>Glasses</span>
                        </a>
                    </td>
                    <td>Holmes Hines</td>
                    <td>$300</td>
                    <td>
                        <span class="badge bg-success-bright text-success">Payment accepted</span>
                    </td>
                    <td>2020/08/28</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product3.png"
                                 class="rounded mr-3" alt="Plate">
                            <span>Plate</span>
                        </a>
                    </td>
                    <td>Serena Glover</td>
                    <td>$250</td>
                    <td>
                        <span class="badge bg-danger-bright text-danger">Payment error</span>
                    </td>
                    <td>2020/08/28</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product4.png"
                                 class="rounded mr-3" alt="Pen">
                            <span>Pen</span>
                        </a>
                    </td>
                    <td>Dianne Prince</td>
                    <td>$550</td>
                    <td>
                        <span class="badge bg-success-bright text-success">Payment accepted</span>
                    </td>
                    <td>2020/08/28</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product5.png"
                                 class="rounded mr-3" alt="Armchair">
                            <span>Armchair</span>
                        </a>
                    </td>
                    <td>Morgan Pitts</td>
                    <td>$280</td>
                    <td>
                        <span class="badge bg-warning-bright text-warning">Preparing the order</span>
                    </td>
                    <td>2020/03/30</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product6.png"
                                 class="rounded mr-3" alt="Flowerpot">
                            <span>Flowerpot</span>
                        </a>
                    </td>
                    <td>Merrill Richardson</td>
                    <td>$128</td>
                    <td>
                        <span class="badge bg-info-bright text-info">Awaiting PayPal payment</span>
                    </td>
                    <td>2020/01/14</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product7.png"
                                 class="rounded mr-3" alt="Wall Clock">
                            <span>Wall Clock</span>
                        </a>
                    </td>
                    <td>Krista Mathis</td>
                    <td>$500</td>
                    <td>
                        <span class="badge bg-secondary-bright text-secondary">Shipped</span>
                    </td>
                    <td>2020/02/28</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product8.png"
                                 class="rounded mr-3" alt="Desk">
                            <span>Desk</span>
                        </a>
                    </td>
                    <td>Frankie Hewitt</td>
                    <td>$300</td>
                    <td>
                        <span class="badge bg-success-bright text-success">Remote payment accepted</span>
                    </td>
                    <td>2020/02/09</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product9.png"
                                 class="rounded mr-3" alt="Night Light">
                            <span>Night Light</span>
                        </a>
                    </td>
                    <td>Hayden Fitzgerald</td>
                    <td>$200</td>
                    <td>
                        <span class="badge bg-success-bright text-success">Delivered</span>
                    </td>
                    <td>2020/01/14</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="product-detail.html" class="d-flex align-items-center">
                            <img width="40" src="../../assets/media/image/products/product10.png"
                                 class="rounded mr-3" alt="Shoe">
                            <span>Shoe</span>
                        </a>
                    </td>
                    <td>Cole Holcomb</td>
                    <td>$700</td>
                    <td>
                        <span class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                    </td>
                    <td>2020/02/28</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                            <i class="ti-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <h6 class="card-title">Revenue by Country</h6>
                        <div>
                            <a href="#" class="btn btn-outline-light btn-sm btn-floating mr-2">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown"
                                   class="btn btn-outline-light btn-sm btn-floating"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Total Revenue</p>
                    <h2 class="mb-4">$469,453</h2>
                    <div class="progress mb-3" style="height: 10px">
                        <div class="progress-bar bg-secondary" style="width: 30%" role="progressbar"></div>
                        <div class="progress-bar bg-info" style="width: 12%" role="progressbar"></div>
                        <div class="progress-bar bg-warning" style="width: 20%" role="progressbar"></div>
                        <div class="progress-bar bg-success" style="width: 18%" role="progressbar"></div>
                        <div class="progress-bar bg-danger" style="width: 20%" role="progressbar"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-6">
                            <p class="mb-0">
                                <span class="fa fa-circle text-danger mr-1"></span>
                                Russia
                            </p>
                            <h5 class="mt-2 mb-0">30%</h5>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <p class="mb-0">
                                <span class="fa fa-circle text-info mr-1"></span>
                                Australia
                            </p>
                            <h5 class="mt-2 mb-0">12%</h5>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <p class="mb-0">
                                <span class="fa fa-circle text-warning mr-1"></span>
                                China
                            </p>
                            <h5 class="mt-2 mb-0">20%</h5>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <p class="mb-0">
                                <span class="fa fa-circle text-success mr-1"></span>
                                Tunisia
                            </p>
                            <h5 class="mt-2 mb-0">18%</h5>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <p class="mb-0">
                                <span class="fa fa-circle text-danger mr-1"></span>
                                Spain
                            </p>
                            <h5 class="mt-2 mb-0">20%</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card border-0 bg-info-bright">
                <div class="card-body">
                    <div class="text-center">
                        <p>Total sales this month</p>
                        <h2>$158,000</h2>
                        <p>This chart shows total sales. You can use the button below for details of this
                            month's sales.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-info">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Reviews</h6>
                    <div class="card-scroll">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex px-0 py-4">
                                <a href="#" class="flex-shrink-0">
                                    <figure class="avatar mr-3">
                                        <img src="../../assets/media/image/user/man_avatar1.jpg"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm btn-floating"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex px-0 py-4">
                                <a href="#" class="flex-shrink-0">
                                    <figure class="avatar mr-3">
                                        <img src="../../assets/media/image/user/man_avatar2.jpg"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(3.5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm btn-floating"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex px-0 py-4">
                                <a href="#" class="flex-shrink-0">
                                    <figure class="avatar mr-3">
                                        <img src="../../assets/media/image/user/man_avatar3.jpg"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(4.5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm btn-floating"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex px-0 py-4">
                                <a href="#" class="flex-shrink-0">
                                    <figure class="avatar mr-3">
                                        <img src="../../assets/media/image/user/man_avatar4.jpg"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(4)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm btn-floating"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="#" class="btn btn-outline-light">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h6 class="card-title mb-0">Best Sellers of the Week</h6>
                        <a href="#">All Sales</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-right">Total Sales</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="#">Flowerpot</a>
                            </td>
                            <td class="text-right">21</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Vase <span class="badge badge-danger ml-1">New</span></a>
                            </td>
                            <td class="text-right">52</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Night light</a>
                            </td>
                            <td class="text-right">74</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Desk</a>
                            </td>
                            <td class="text-right">25</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Glasses</a>
                            </td>
                            <td class="text-right">11</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Wall Clock</a>
                            </td>
                            <td class="text-right">8</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Armchair</a>
                            </td>
                            <td class="text-right">5</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Shoe</a>
                            </td>
                            <td class="text-right">5</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body text-center pt-0">
                    <a href="#" class="btn btn-outline-light">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </div>
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2020 Baston - <a href="http://laborasyon.com/" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="../../vendors/bundle.js"></script>

<!-- Apex chart -->
<script src="{{ asset('../../../templete2/apexcharts.com/samples/assets/irregular-data-series.js')}}"></script>
<script src="{{ asset('../../templete2/vendors/charts/apex/apexcharts.min.js')}}"></script>

<!-- Daterangepicker -->
<script src="{{ asset('../../templete2/vendors/datepicker/daterangepicker.js')}}"></script>

<!-- DataTable -->
<script src="{{ asset('../../templete2/vendors/dataTable/datatables.min.js')}}"></script>

<!-- Dashboard scripts -->
<script src="{{ asset('../../templete2/assets/js/examples/pages/ecommerce-dashboard.js')}}"></script>

<!-- App scripts -->
<script src="{{ asset('../../templete2/assets/js/app.min.js')}}"></script>
</body>

<!-- Mirrored from baston.laborasyon.com/demos/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 01:56:02 GMT -->
</html>
