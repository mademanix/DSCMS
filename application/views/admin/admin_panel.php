        <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel">
                    <div class="container-fluid">
                        <div class="col-xs-12 buffer-top">
                            <div class="header-panel">
                                <h1>Panel główny</h1>
                            </div>
                        </div>
                    </div>
                        <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                        <div class="container-fluid">
                            <div class="col-xs-12">
                                <div class="main-panel">
                                    <div class="container-fluid">
                                        <div class="col-md-12">
                                            <div class="main-menu-panel">
                                                <div class="container-fluid">
                                                    <div class="menu-3 text-center">
                                                       
                                                        <div class="btn-group">
                                                            <div class="col-md-4 col-sm-12">
                                                                <a href="<?php echo base_url(); ?>panel/posts/add_post" class="btn btn-option" role="button">
                                                                    <i class="fa fa-newspaper-o" aria-hidden="true" style="font-size: 50px;"></i>
                                                                    <p>Dodaj posta</p>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <a href="http://madstories.xaa.pl/panel/users" class="btn btn-option" role="button">
                                                                    <i class="fa fa-user" aria-hidden="true" style="font-size: 50px;"></i>
                                                                <p>Użytkownicy</p>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                            <a href="http://madstories.xaa.pl/panel/edit_styles" class="btn btn-option disabled" role="button">
                                                                <i class="fa fa-ban" aria-hidden="true" style="font-size: 50px; color: red"></i>
                                                                <!-- <i class="fa fa-pencil" aria-hidden="true" style="font-size: 50px;"></i> -->
                                                                <p>Edytuj style</p>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                            <a href="http://madstories.xaa.pl/panel/settings" class="btn btn-option disabled" role="button">
                                                                <i class="fa fa-ban" aria-hidden="true" style="font-size: 50px; color: red"></i>
                                                                <!-- <i class="fa fa-cog" aria-hidden="true" style="font-size: 50px;"></i> -->
                                                                <p>Ustawienia</p>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                            <a href="#" data-toggle="modal" data-target="#info" class="btn btn-option" role="button">
                                                                
                                                                    <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 50px;"></i>
                                                                    <p>o DSCMS</p>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                            <a href="<?php echo base_url();?>logout" class="btn btn-option" role="button">
                                                                
                                                                    <i class="fa fa-power-off" aria-hidden="true" style="font-size: 50px;"></i>
                                                                    <p>Wyloguj</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
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