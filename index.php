<!DOCTYPE html>
<html>
<head>
    <title>CarSale - Sua loja de São Lourenço</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width:device-width">
    <meta name="description" content="Venda de carros importados, nacionais de São Lourenço - BR">
    <meta name="keywords" content="fiat, 147, venda, compra, nacionais, importados, pr">

    <!-- facebook - open graphics (og) -->
    <meta property="og:title" content="CarSale">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:description" content="Venda de carros importados, nacionais de São Lourenço - BR">
    <meta property="og:image" content="http://pos.professorburnes.com.br/carsale/imgs/carsale.jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="315">

    <!-- twitter cards -->
    <meta name="twitter:url" content="@renandelmonico">
    <meta name="twitter:image" content="http://pos.professorburnes.com.br/carsale/imgs/carsale.jpg">
    <meta name="twitter:title" content="CarSale">

    <!-- javascript -->
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <a href="index.php">
                        <img src="imgs/logo.png">
                    </a>
                </div>
                <div class="col-md-9 col-sm-9 text-right">
                    <i class="fa fa-phone"></i>
                    0800 1406

                    <a href="http://facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="http://twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div> <!--row-->
        </div> <!--container-->
    </header>

    <nav class="navbar navbar-default">
        <div class="container-fluid container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </button>
            </div> <!-- navbar-header -->

            <div id="menu" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="sobre">Sobre</a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Veículos</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="nacionais">Nacionais</a>
                            </li>
                            <li>
                                <a href="importados">Importados</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contato">Contato</a>
                    </li>
                </ul>

                <form name="form1" class="navbar-form navbar-right">
                    <div class="input-group input-group-lg">
                        <input type="text" placeholder="Buscar..." class="form-control">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div> <!--input-group-btn -->
                    </div> <!-- input-group -->
                </form> <!-- form -->
            </div> <!-- menu -->
        </div> <!-- container -->
    </nav>

    <div class="banner hidden-xs hidden-sm">

    </div>

    <main class="container">
        <?php
            if (isset($_GET['p'])) {
                $p = trim($_GET['p']);
                $p = explode(',', $p);
                $pagina = $p[0];
            } else {
                $pagina = 'home';
            }

            $pagina = "pages/$pagina.php";

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'pages/erro.php';
            }
        ?>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <p>2015 - <?php echo (new DateTime('now'))->format('Y'); ?> - Desenvolvido por Renan Delmonico - Todos os direitos reservados</p>
                </div>
                <div class="col-md-3 col-sm-3 text-right">
                    <i class="fa fa-phone"></i>
                    0800 1406

                    <a href="http://facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="http://twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </footer>
</body>
</html>