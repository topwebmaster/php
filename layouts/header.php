<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?= $title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../css/navbar-fixed-top.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Открыть навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">PHP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Главная</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Пункт</a></a>
                            <ul>
                                <li>Пу</li>
                                <li>Пу</li>
                                <li>Пу</li>
                                <li>Пу</li>
                            </ul>
                        </li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>

                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                    </ul>

                </li>
                <!-- Dropdown Large begin -->
                <li class="dropdown dropdown-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Выпад<b class="caret"></b></a>

                    <ul class="dropdown-menu dropdown-menu-large row">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Glyphicons</li>
                                <li><a href="#">Available glyphs</a></li>
                                <li class="disabled"><a href="#">How to use</a></li>
                                <li><a href="#">Examples</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Dropdowns</li>
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Aligninment options</a></li>
                                <li><a href="#">Headers</a></li>
                                <li><a href="#">Disabled menu items</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Button groups</li>
                                <li><a href="#">Basic example</a></li>
                                <li><a href="#">Button toolbar</a></li>
                                <li><a href="#">Sizing</a></li>
                                <li><a href="#">Nesting</a></li>
                                <li><a href="#">Vertical variation</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Button dropdowns</li>
                                <li><a href="#">Single button dropdowns</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Input groups</li>
                                <li><a href="#">Basic example</a></li>
                                <li><a href="#">Sizing</a></li>
                                <li><a href="#">Checkboxes and radio addons</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Navs</li>
                                <li><a href="#">Tabs</a></li>
                                <li><a href="#">Pills</a></li>
                                <li><a href="#">Justified</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Navbar</li>
                                <li><a href="#">Default navbar</a></li>
                                <li><a href="#">Buttons</a></li>
                                <li><a href="#">Text</a></li>
                                <li><a href="#">Non-nav links</a></li>
                                <li><a href="#">Component alignment</a></li>
                                <li><a href="#">Fixed to top</a></li>
                                <li><a href="#">Fixed to bottom</a></li>
                                <li><a href="#">Static top</a></li>
                                <li><a href="#">Inverted navbar</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>
                <!-- Dropdown Large end -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-content">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="http://placehold.it/120x120"
                                             alt="Alternate Text" class="img-responsive" />
                                        <p class="text-center small">
                                            <a href="#">Change Photo</a></p>
                                    </div>
                                    <div class="col-md-7">
                                        <span>Bhaumik Patel</span>
                                        <p class="text-muted small">
                                            mail@gmail.com</p>
                                        <div class="divider">
                                        </div>
                                        <a href="#" class="btn btn-primary btn-sm active">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-footer">
                                <div class="navbar-footer-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-default btn-sm">Change Passowrd</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="http://www.jquery2dotnet.com" class="btn btn-default btn-sm pull-right">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <ol class="breadcrumb">

        </ol>
    </div>

</div>
