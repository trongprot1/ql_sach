<?php
/* Smarty version 3.1.33, created on 2018-11-08 11:39:25
  from 'F:\ql_sach\views\the_loai\V_them_the_loai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be4206d312584_71554288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62c1d967d74eee43f49598f434a0390b46e1a08e' => 
    array (
      0 => 'F:\\ql_sach\\views\\the_loai\\V_them_the_loai.tpl',
      1 => 1541667393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be4206d312584_71554288 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">perm_identity</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Thêm Mới -
                <small class="category"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</small>
            </h4>
            <form action="/theloai.php/?action=themmoi" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Thể Loại</label>
                            <input name="ten_theloai" type="text" class="form-control">
                        </div>
                    </div>

                </div>
                <a href="/theloai.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
