<?php
/* Smarty version 5.4.1, created on 2024-09-23 10:35:48
  from 'file:/vagrant/projekte/07_mvc/src/Views/Meldung/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f12864a95975_65723706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '690d979863c423d066720095893c8bb537cf9dcc' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/Meldung/index.tpl.html',
      1 => 1692258948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f12864a95975_65723706 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/Meldung';
?><div class="card btn-group-lg mt-3">
    <div class="card-body">
        <p class="card-title">
            <?php if (is_array($_smarty_tpl->getValue('meldung'))) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('meldung'), 'value');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                    <?php echo $_smarty_tpl->getValue('value');?>
<br>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->getValue('meldung');?>

            <?php }?>
        </p>
        <div class="row mt-2">
            <div class="col-2">
                <a href="<?php echo $_smarty_tpl->getValue('link');?>
" role="button" class="btn btn-custom btn-sm">Zurück</a>
            </div>
        </div>
    </div>
</div>

<?php }
}
