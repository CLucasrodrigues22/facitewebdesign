<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="inicio" class="logo">
                    <img src="assets/img/logo.png" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- Fim Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Procurar ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <!-- <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        New user registered
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad commented on Admin
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="assets/img/profile2.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza send messages to you
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Farrah liked Admin
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file-1"></i>
                                                    <span class="text">Generated Report</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-database"></i>
                                                    <span class="text">Create New Database</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-pen"></i>
                                                    <span class="text">Create New Post</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-interface-1"></i>
                                                    <span class="text">Create New Task</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-list"></i>
                                                    <span class="text">Completed Tasks</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file"></i>
                                                    <span class="text">Create New Invoice</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="assets/image/usuario/<?= ($usuarioSessao->imagem != '' && file_exists('assets/image/usuario/' . $usuarioSessao->imagem) ? $usuarioSessao->imagem : 'user.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="assets/image/usuario/<?= ($usuarioSessao->imagem != '' && file_exists('assets/image/usuario/' . $usuarioSessao->imagem) ? $usuarioSessao->imagem : 'user.jpg') ?>" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?= $usuarioSessao->nome ?></h4>
                                                <p class="text-muted"><strong>Usuário: </strong><?= $usuarioSessao->usuario ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#meuPerfil">Meu Perfil</a>
                                        <!-- <a class="dropdown-item" href="#">My Balance</a> -->
                                        <!-- <a class="dropdown-item" href="#">Inbox</a> -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout">Finalizar Sessão</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Início Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="assets/image/usuario/<?= ($usuarioSessao->imagem != '' && file_exists('assets/image/usuario/' . $usuarioSessao->imagem) ? $usuarioSessao->imagem : 'user.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <?= $usuarioSessao->nome ?>
                                    <span class="user-level"><?= $usuarioSessao->cargo ?></span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="" data-toggle="modal" data-target="#meuPerfil">
                                            <span class="link-collapse">Meu Perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logout">
                                            <span class="link-collapse">Finalizar Sessão</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Dashboard</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#forms">
                                <i class="fas fa-list"></i>
                                <p>Formulários</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-toggle="collapse" href="#subnav1">
                                            <i class="fas fa-plus-circle"></i>
                                            <p>Novo Portfólio</p>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav1">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="form_site">
                                                        <i class="fas fa-plus"></i>
                                                        <p>Site</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="form_logo">
                                                        <i class="fas fa-plus"></i>
                                                        <p>Logotipo</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="form_promo">
                                                        <i class="fas fa-plus"></i>
                                                        <p>Promocionais</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="form_usuario">
                                            <i class="fas fa-plus-circle"></i>
                                            <p>Novo Usuário</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form_avaliacao">
                                            <i class="fas fa-plus-circle"></i>
                                            <p>Nova Avaliação</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form_servico">
                                            <i class="fas fa-plus-circle"></i>
                                            <p>Novo Serviço</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form_faq">
                                            <i class="fas fa-plus-circle"></i>
                                            <p>Novo FAQ</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#portfolio">
                                <i class="fas fa-archive"></i>
                                <p>Portfólio</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="portfolio">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="sites">
                                            <i class="fas fa-code"></i>
                                            <p>Sites</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logotipo">
                                            <i class="fas fa-pencil-ruler"></i>
                                            <p>Logotipos</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="promocionais">
                                            <i class="fas fa-images"></i>
                                            <p>Promocionais</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-target="collapse" href="usuario">
                                <i class="fas fa-users"></i>
                                <p>Usuários</p>
                                <span class="sidebar-mini-icon"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-target="collapse" href="avaliacao">
                                <i class="fas fa-comment-alt"></i>
                                <p>Avaliações</p>
                                <span class="sidebar-mini-icon"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-target="collapse" href="servico">
                                <i class="fas fa-laptop-code"></i>
                                <p>Serviços</p>
                                <span class="sidebar-mini-icon"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-target="collapse" href="faq">
                                <i class="fas fa-question-circle"></i>
                                <p>FAQ</p>
                                <span class="sidebar-mini-icon"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Fim Sidebar -->
        <div class="main-panel">