<?php
/* Smarty version 5.4.1, created on 2024-11-11 08:12:06
  from 'file:/vagrant/projekte/08_mvc/src/Views/Dropzone/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6731ae461f2056_87655609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f5ff717090c37bb5c2edf4be68058605fb8fa7f' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Dropzone/index.tpl.html',
      1 => 1731309124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6731ae461f2056_87655609 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Dropzone';
?><div class="container">
    <div class="card btn-group-lg mt-3">
        <div class="card-body ">
            <h3 class="card-title">Upload</h3>
            <div class="row">
                <div class="col-6">
                    <div class="panel panel-info">
                        <div class="panel-heading"><p>Hier Dateien hochladen</p></div>
                        <div class="dropzone"></div>

                    </div>
                    <div id="info"></div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <form enctype="multipart/form-data">
                            <div class="row mt-3">
                                <div class="col-15">
                                    <label for="uploadDefault" class="mb-2">Upload File</label><br>
                                    <input type="file" class="form-control" name="files" id="uploadDefault">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-custom" formmethod="post"
                                            formaction="/dropzone/upload" value="Anlegen">Upload beginnen
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
