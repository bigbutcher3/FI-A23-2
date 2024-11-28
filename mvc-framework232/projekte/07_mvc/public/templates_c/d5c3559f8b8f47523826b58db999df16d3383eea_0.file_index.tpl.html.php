<?php
/* Smarty version 5.4.0, created on 2024-08-20 12:02:41
  from 'file:/vagrant/projekte/07_mvc/src/Views/ifelse/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66c469c1786501_35031400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c3559f8b8f47523826b58db999df16d3383eea' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/ifelse/index.tpl.html',
      1 => 1707822238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c469c1786501_35031400 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/ifelse';
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
