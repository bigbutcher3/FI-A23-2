<?php
/* Smarty version 4.3.4, created on 2024-02-26 09:19:46
  from '/vagrant/projekte/07_smarty/src/Views/Object/index.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */

use use if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65dc49a24eeb68_50131760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8756e7acae0605492c2010e574f1579abbfbe7b5' => 
    array (
      0 => '/vagrant/projekte/07_smarty/src/Views/Object/index.tpl.html',
      1 => 1708935587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc49a24eeb68_50131760 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card  mt-3">
    <div class="card-body ">
        <div class="row">
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personen']->value->getNameArray(), 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <div class="col-6">
            <pre>
                <?php echo var_dump($_smarty_tpl->tpl_vars['personen']->value);?>

            </pre>
                <h6>Name: <?php echo $_smarty_tpl->tpl_vars['personen']->value->name;?>
</h6>
                <h6>Name: <?php echo $_smarty_tpl->tpl_vars['personen']->value->vorname;?>
</h6>
                <h6>Name: <?php echo $_smarty_tpl->tpl_vars['personen']->value->getGeburtsdatum();?>
</h6>
            </div>
        </div>
    </div>
</div><?php }
}
