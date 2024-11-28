<?php
/* Smarty version 5.4.1, created on 2024-11-08 10:58:25
  from 'file:/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/Login/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672de0c1af67e1_17180810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2adfe557e5712b8f250484ecbad8ac09af223a9' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/Login/index.tpl.html',
      1 => 1729580154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672de0c1af67e1_17180810 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/Login';
?><div class="container">
    <div class="row">
        <div class="col-6">
            <?php if (!empty($_GET['param1'])) {?>
            <b style="color:red">Login inkorrekt!</b>
            <?php } else { ?>
            <b> Bitte Zugangsdaten eingeben!</b>
            <?php }?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form class="kontaktformular">
                <div class="form-group">
                    <div class="input-group mb-3 mt-3">
                        <label for="username" class="input-group-text">Username</label>
                        <input type="text" class="form-control" id="username" required value="" placeholder="Username"
                               name="username">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <label for="passwd" class="input-group-text">Password</label>
                        <input type="password" class="form-control" id="passwd" required placeholder="Password" name="passwd">
                    </div>
                </div>
                <button type="submit" formaction="/textspeichernjson/logincontrol" formmethod="post" name="logindaten"
                        class="btn btn-custom mb-2">LogIn
                </button>
            </form>
        </div>
    </div>
</div><?php }
}
