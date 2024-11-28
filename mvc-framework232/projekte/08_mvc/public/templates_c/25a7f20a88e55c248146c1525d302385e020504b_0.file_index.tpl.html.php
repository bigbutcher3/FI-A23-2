<?php
/* Smarty version 5.4.1, created on 2024-11-08 10:58:31
  from 'file:/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/DatensaetzeAuslesen/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672de0c777d2e4_87508143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a7f20a88e55c248146c1525d302385e020504b' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/DatensaetzeAuslesen/index.tpl.html',
      1 => 1729580154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672de0c777d2e4_87508143 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/DatensaetzeAuslesen';
?><div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-12">
                    <h3 class="card-title">Ausgabe der einzelnen Datensätze</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <ul class="list-group">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('NAMEARRAY') ? constant('NAMEARRAY') : null), 'value', false, 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                        <li class="list-group-item d-flex"><span class="col-3 bg-color">
                            <?php echo $_smarty_tpl->getValue('value');?>
:</span><span class="col-1"></span>
                            <span class="col-8"><?php echo $_SESSION['datensatz'][$_smarty_tpl->getValue('item')];?>
</span>
                        </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <br>
                    <p>Datensätze: <?php echo $_SESSION['index']+1;?>
 von <?php echo $_SESSION['count']+1;?>
</p>
                    <a href="/Textspeichernjson" role="button"
                       class="btn btn-custom mt-3">zum Formular</a>
                    <a href="/Textspeichernjson/anfangDatensatz" role="button"
                       class="btn btn-custom mt-3 <?php if ($_SESSION['index'] === 0) {?> disabled <?php }?>"><<</a>
                    <a href="/Textspeichernjson/back" role="button"
                       class="btn btn-custom mt-3 <?php if ($_SESSION['index'] === 0) {?> disabled <?php }?>">Back</a>
                    <a href="/Textspeichernjson/next" role="button"
                       class="btn btn-custom mt-3 <?php if ($_SESSION['index'] === $_SESSION['count']) {?> disabled <?php }?>">Next</a>
                    <a href="/Textspeichernjson/endeDatensatz" role="button"
                       class="btn btn-custom mt-3 <?php if ($_SESSION['index'] === $_SESSION['count']) {?> disabled <?php }?>">>></a>
                    <a href="/Textspeichernjson/del" role="button"
                       class="btn btn-custom mt-3">Löschen</a>
                    <a href="/Textspeichernjson/destroy" role="button"
                       class="btn btn-custom mt-3">Abmelden</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php }
}
