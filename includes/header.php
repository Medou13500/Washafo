<title>Washafo</title>
  <!-- CSS Bootstrap, AdminLTE, FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- JS Bootstrap & AdminLTE -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</head>
<body class="bg-primary text-white">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-2">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="?page=home">
        <img src="../public /assets/img/logo2.png" alt="Logo Washafo"
            class="rounded-circle shadow-sm mr-2" style="width: 48px; height: 48px; object-fit: cover;">
        <span class="font-weight-bold ml-2">Washafo</span>
        </a>

        <!-- Toggle Mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
            </button>

        <!-- Menu  -->
            <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-2">
                <a class="nav-link text-white" href="?page=home">Accueil</a>
                </li>
                <li class="nav-item px-2">
                <a class="nav-link text-white" href="?page=prestation">Prestations</a>
                </li>
                <li class="nav-item px-2">
                <a class="nav-link text-white" href="?page=contact">Contact</a>
                </li>
                <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    Aide
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">FAQ</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="?page=contact">Nous contacter</a>
                </div>
                </li>
            </ul>
                </div>
            </div>
            </nav>
