<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DSCMS system</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/admin.css" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/sidebar.css" crossorigin="anonymous">

        <link rel="Shortcut icon" href="<?php echo base_url();?>img/icon_dscms.png">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Schowaj</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown hidden-lg hidden-md">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url()?>panel">Panel główny</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>panel/posts">Posty</a>
                            </li>
                            <li>
                                <a href="#">Strony</a>
                            </li>
                            <li>
                                <a href="#">Media</a>
                            </li>
                            <li>
                                <a href="#">Użytkownicy</a>
                            </li>
                            <li>
                                <a href="#">Ustawienia</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#info">O DSCMS</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <?php echo $realname; ?>
                        </a>
                    </li>
                    <li><a href="#">Pomoc</a></li>
                    <li><a href="<?php echo base_url();?>logout">Wyloguj</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url(); ?>panel">
                        <i class="fa fa-home" aria-hidden="true"></i>Panel główny
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>panel/posts"><i class="fa fa-list" aria-hidden="true"></i>Posty</a>
                </li>
                <li>
                    <!-- <a href="#"><i class="fa fa-file" aria-hidden="true"></i>Strony</a> -->
                    <a href="#"><i class="fa fa-ban" aria-hidden="true" style="color: red"></i>Strony</a>
                </li>
                <li>
                    <!-- <a href="#"><i class="fa fa-file-image-o" aria-hidden="true"></i>Media</a> -->
                    <a href="#"><i class="fa fa-ban" aria-hidden="true" style="color: red"></i>Media</a>
                </li>
                <li>
                    <!-- <a href="#"><i class="fa fa-users" aria-hidden="true"></i>Użytkownicy</a> -->
                    <a href="#"><i class="fa fa-ban" aria-hidden="true" style="color: red"></i>Użytkownicy</a>
                </li>
                <li>
                    <!-- <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>Ustawienia</a> -->
                    <a href="#"><i class="fa fa-ban" aria-hidden="true" style="color: red"></i>Ustawienia</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#info"><i class="fa fa-info-circle" aria-hidden="true"></i>O DSCMS</a>
                </li>
            </ul>
        </div>

        <div id="info" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <p>DSCMS jest systemem pozwalający na zarządzaniem treści na stronie internetowej. DSCMS jest skrótem od Damn Simply CMS, co oznacza "Cholernie Prosty CMS".</p>
                <p>Jest stworzony przez 8beets Studio, prosty zespół wyspecjalizowany w tworzeniu stron przy pomocy HTML5/CSS3, jQuery, Bootstrap 3 oraz CodeIgniter 3.</p>
                <p>DSCMS na tą chwilę jest w wersji rozwojowej, można ją edytować, zmieniać treść i zawartość kodu. Nie jesteśmy chujami, jeśli chodzi o tą kwestię. Niech żyje GPL.</p>
                <p>Tylko po prostu daj znać, że to nasze, a możesz go używać gdziekolwiek chcesz. Spokojnie - system nie jest inwazyjny, nie krzyczy, że to czy tamto jest od nas. Pozdro elo.</p>
                <p>Obecna wersja to 0.2alpha. Długo pewnie minie, zanim przejdę do wersji 1.0.</p>
              </div>
            </div>

          </div>
        </div>