<div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel">
                    <div class="container-fluid">
                        <div class="col-xs-12 buffer-top">
                            <div class="header-panel">
                                <h1>Potwierdź usunięcie posta</h1>
                            </div>
                        </div>
                    </div>
                        <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                        <div class="container-fluid">
                            <div class="col-xs-12">
                                <div class="main-panel">
                                    <div class="container-fluid">
                                        <div class="col-xs-12">
                                            <div class="main-menu-panel">
                                                <div class="container-fluid">
                                                     <div class="modal-body">
                                                        <h4 class="text-center">Na pewno chcesz usunąć "<?php echo $news['title']; ?>"?</h4>
                                                            <div class="col-md-4">
                                                                <a href="<?php echo base_url()."panel/posts/remove/".$news['slug'] ?>" class="btn btn-option" role="button">
                                                                    TAK
                                                                </a>
                                                            </div>
                                                            <div class="col-md-4 col-md-offset-4">               
                                                                <a href="<?php echo base_url()."panel/posts/list"?>" class="btn btn-option" role="button">
                                                                    NIE
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
        <div id="info" class="modal fade" role="dialog">
            <div class="modal-dialog">
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