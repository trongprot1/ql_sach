<?php
/* Smarty version 3.1.33, created on 2018-11-06 16:32:18
  from 'E:\QL Sach\views\tac_gia\V_them_tac_gia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be1c2126f7f28_90573407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89c9db92ee7c9f03977e9a7620bb8745cd708800' => 
    array (
      0 => 'E:\\QL Sach\\views\\tac_gia\\V_them_tac_gia.tpl',
      1 => 1541507857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be1c2126f7f28_90573407 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/tacgia.php/?action=themmoi" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Tác Giả</label>
                            <input name="ten_tacgia" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Website</label>
                            <input name="website" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ghi Chú</label>
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <textarea name="ghi_chu" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/tacgia.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
