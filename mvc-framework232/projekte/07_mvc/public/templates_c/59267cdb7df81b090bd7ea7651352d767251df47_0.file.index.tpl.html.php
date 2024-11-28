<?php
/* Smarty version 4.3.4, created on 2024-02-23 10:30:30
  from '/vagrant/projekte/07_smarty/src/Views/Meldung/index.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */

use use if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d865b69cad87_06546584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59267cdb7df81b090bd7ea7651352d767251df47' => 
    array (
      0 => '/vagrant/projekte/07_smarty/src/Views/Meldung/index.tpl.html',
      1 => 1692258948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d865b69cad87_06546584 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card btn-group-lg mt-3">
    <div class="card-body">
        <p class="card-title">
            <?php if (is_array($_smarty_tpl->tpl_vars['meldung']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meldung']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['meldung']->value;?>

            <?php }?>
        </p>
        <div class="row mt-2">
            <div class="col-2">
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" role="button" class="btn btn-custom btn-sm">Zurück</a>
            </div>
        </div>
    </div>
</div>

<?php }
}
