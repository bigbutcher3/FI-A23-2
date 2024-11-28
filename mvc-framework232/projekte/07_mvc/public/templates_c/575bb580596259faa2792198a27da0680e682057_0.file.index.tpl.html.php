<?php
/* Smarty version 4.3.4, created on 2024-02-23 10:28:15
  from '/vagrant/projekte/07_smarty/src/Views/ifelse/index.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */

use use if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8652f269077_15348914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '575bb580596259faa2792198a27da0680e682057' => 
    array (
      0 => '/vagrant/projekte/07_smarty/src/Views/ifelse/index.tpl.html',
      1 => 1707822238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8652f269077_15348914 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Reservierung</h1>
<div class="row">
    <div class="col-6">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="passwd">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" formaction="/reservierung/speichern" formmethod="post" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div><?php }
}
