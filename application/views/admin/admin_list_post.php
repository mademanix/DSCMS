        <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel">
                    <div class="container-fluid">
                        <div class="col-xs-12 buffer-top">
                            <div class="header-panel">
                                <h1>Lista postów</h1>
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
                                                        <table class="table table-hover table-responsive">
                                                            <thead>
                                                                <tr>
                                                                    <th>Tytuł</th>
                                                                    <th class="hidden-xs">Podtytuł</th>
                                                                    <th class="hidden-xs">Autor</th>
                                                                    <th class="hidden-xs">Data utworzenia</th>
                                                                    <th class="hidden-xs">Post widoczny?</th>
                                                                    <th class="hidden-xs">Autor widoczny?</th>
                                                                    <th class="hidden-xs">Data widoczna?</th>
                                                                    <th>Akcje</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach (array_reverse($news) as $news_item) : ?>
                                                        
                                                                <tr>
                                                                    <td><a href="<?php echo base_url().'post/'.$news_item['slug'];?>"><?php echo $news_item['title']; ?></a></td>
                                                                    <td class="hidden-xs"><?php echo $news_item['subtitle']; ?></td>
                                                                    <td class="hidden-xs"><?php echo $news_item['author']; ?></td>
                                                                    <td class="hidden-xs"><?php echo $news_item['date']; ?></td>
                                                                    <td class="hidden-xs">
                                                                        <?php 
                                                                            if($news_item['is_viewed'] == TRUE)
                                                                                echo 'TAK';
                                                                            else echo 'NIE';
                                                                        ?>
                                                                    </td class="hidden-xs">
                                                                    <td class="hidden-xs">
                                                                        <?php 
                                                                            if($news_item['show_author'] == TRUE)
                                                                                echo 'TAK';
                                                                            else echo 'NIE';
                                                                        ?>
                                                                    </td class="hidden-xs">
                                                                    <td class="hidden-xs">
                                                                        <?php 
                                                                            if($news_item['show_date'] == TRUE)
                                                                                echo 'TAK';
                                                                            else echo 'NIE';
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="<?php echo base_url()."panel/posts/edit/".$news_item['slug'] ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                                                        <a href="<?php echo base_url()."panel/posts/confirm_remove/".$news_item['slug'] ?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                                                    </td>

                                                                </tr>
                                                            
                                                    <?php endforeach; ?>
                                                    </tbody>
                                                        </table>
                                                 
                                                    
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