        <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel">
                    <div class="container-fluid">
                        <div class="col-xs-12 buffer-top">
                            <div class="header-panel">
                                <h1>Edytuj post</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="col-xs-12">
                            <div class="main-panel">
                                <div class="container-fluid">
                                    <div class="col-xs-12">   

                                        <?php echo form_open('panel/posts/edited', 'class="form-horizontal"');?>
                                            <span class="label">Tytuł</span>    
                                            <?php echo form_input('title', $news['title'], 'class="form-control" placeholder="Tutaj wpisz tytuł posta"'); ?>
                                            <br>
                                            <span class="label">Link do posta</span>
                                            <?php echo form_input('slug', $news['slug'], 'class="form-control" placeholder="Tutaj wpisz treść posta" readonly'); ?>
                                            <br>
                                            <span class="label">Data dodania</span>
                                            <?php echo form_input('u_date', $news['date'], 'class="form-control" placeholder="Tutaj wpisz treść posta" data-format="yyyy-MM-dd"'); ?>
                                            <br>
                                            <span class="label">Podtytuł</span>
                                            <?php echo form_input('subtitle', $news['subtitle'], 'class="form-control" placeholder="Tutaj wpisz podtytuł posta (aczkolwiek nie musisz)"'); ?>
                                            <br>
                                            <div>
                                            <span class="label">Treść wiadomości</span>
                                            </div>
                                            <div class="textpad btn-group">
                                                <button type="button" class="btn btn-default"><i class="fa fa-bold" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-italic" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-underline" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-strikethrough" aria-hidden="true"></i></button>           
                                                <button type="button" class="btn btn-default"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-table" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-left" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-center" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-right" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
                                            </div>   
                                            <?php 
                                                $breaks = array("<br />","<br>","<br/>");  
                                                $text = str_ireplace($breaks, "\n", $news['text']); 
                                                echo form_textarea('text', $text, 'class="form-control" placeholder="Tutaj wpisz treść posta"'); ?>
                                            <br>
                                            <span class="label">Post widoczny?</span>
                                            <?php echo form_checkbox('viewed', '1', TRUE); ?>
                                            <br>
                                            <span class="label">Autor widoczny?</span>
                                            <?php echo form_checkbox('author', '1', TRUE); ?>
                                            <br>
                                            <span class="label">Data dodania widoczna?</span>
                                            <?php echo form_checkbox('date', '1', TRUE); ?>
                                            <br>
                                            <?php echo form_submit('update', 'Zaktualizuj post', 'class="btn btn-default"'); ?>

                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        </div>