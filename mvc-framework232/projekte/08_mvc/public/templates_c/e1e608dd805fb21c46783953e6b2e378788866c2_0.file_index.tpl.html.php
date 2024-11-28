<?php
/* Smarty version 5.4.1, created on 2024-11-08 11:05:00
  from 'file:/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/Galerie/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672de24c4271b1_53645798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e608dd805fb21c46783953e6b2e378788866c2' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/Galerie/index.tpl.html',
      1 => 1729578158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672de24c4271b1_53645798 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/Galerie';
?><div class="container">
    <div class="card mb-1">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col mb-1">
                    <p class="d-flex justify-content-center justify-content-lg-start">Meine eigene programmierte
                        Galerie!</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="row position-relative">
                        <div class="d-flex justify-content-center col img_gr1 position-absolute bildGr"></div>
                        <div class="d-flex justify-content-center col img_gr position-relative bildGr"></div>

                        <div class="carousel-control-prev left" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </div>
                        <div class="carousel-control-next right" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col-8">
                            <div class="row row-cols-4 row-cols-lg-6  d-flex justify-content-center d-none d-md-inline-flex"
                                 id="img_kl">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php }
}
