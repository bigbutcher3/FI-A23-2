<?php
/* Smarty version 4.3.4, created on 2024-02-26 09:21:05
  from '/vagrant/projekte/07_smarty/src/Views/Schleifen/index.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */

use use if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65dc49f108af92_81117374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bedd2fb2e9064f5473d02182becebf9943cbf3fe' => 
    array (
      0 => '/vagrant/projekte/07_smarty/src/Views/Schleifen/index.tpl.html',
      1 => 1708935665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/vagrant/projekte/07_smarty/header.tpl' => 1,
  ),
),false)) {
function content_65dc49f108af92_81117374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config/smarty.conf', "Kunden", 0);
?>

<div class="card  mt-3">
    <div class="card-body ">
        <h3 class="card-title">Hallo Text <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cardTitleConf');?>
</h3>
        <h3 class="card-title">Hallo Text <?php echo $_smarty_tpl->tpl_vars['cardTitle']->value;?>
</h3>
        <h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'seitenTitel');?>
</h3>
        <h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'nocheintitle');?>
</h3>
        <div class="row">
            <div class="col-6">
                                
                                <pre>
                    <?php echo print_r($_smarty_tpl->tpl_vars['array']->value);?>

                    <?php echo var_dump($_smarty_tpl->tpl_vars['arrayAsso']->value);?>

                    <?php echo json_encode($_smarty_tpl->tpl_vars['array']->value);?>

                    <?php echo json_encode($_smarty_tpl->tpl_vars['array']->value);?>

                </pre>
                Hallo <?php echo $_smarty_tpl->tpl_vars['array']->value[0];?>
, herzlich Willkommen!
                <br>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayAsso']->value, 'value', false, 'item');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
        </div>
        <div class="row">
            <div class="col-6">
<pre>
    <?php echo print_r($_smarty_tpl->tpl_vars['kontakteAssoziativen']->value);?>

   </pre>
                <ul>
                    <li><?php echo $_smarty_tpl->tpl_vars['kontakteAssoziativen']->value['fax'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['kontakteAssoziativen']->value['email'];?>
</li>
                    <li>
                        <ul>
                            <li><?php echo $_smarty_tpl->tpl_vars['kontakteAssoziativen']->value['telefon']['privat'];?>
</li>
                            <li><?php echo $_smarty_tpl->tpl_vars['kontakteAssoziativen']->value['telefon']['mobil'];?>
</li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li><?php echo $_smarty_tpl->tpl_vars['kontakte']->value[0];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['kontakte']->value[1];?>
</li>
                    <li>
                        <ul>
                            <li><?php echo $_smarty_tpl->tpl_vars['kontakte']->value[2][0];?>
</li>
                            <li><?php echo $_smarty_tpl->tpl_vars['kontakte']->value[2][1];?>
</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kollegenMitVorname']->value, 'vorname', false, 'k');
$_smarty_tpl->tpl_vars['vorname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['vorname']->value) {
$_smarty_tpl->tpl_vars['vorname']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
                <?php $_smarty_tpl->_subTemplateRender("file:/vagrant/projekte/07_smarty/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo $_SERVER['SERVER_NAME'];?>

        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</div><?php }
}
