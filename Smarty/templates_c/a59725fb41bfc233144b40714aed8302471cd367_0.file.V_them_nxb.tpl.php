<?php
/* Smarty version 3.1.33, created on 2018-11-08 11:12:39
  from 'F:\ql_sach\views\nxb\V_them_nxb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be41a274fe226_00584666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a59725fb41bfc233144b40714aed8302471cd367' => 
    array (
      0 => 'F:\\ql_sach\\views\\nxb\\V_them_nxb.tpl',
      1 => 1541667393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be41a274fe226_00584666 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/nxb.php/?action=themmoi" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Nhà Xuất Bản</label>
                            <input name="ten_nxb" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Email</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Địa Chỉ</label>
                            <input name="dia_chi" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Thông Tin</label>
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <textarea name="thong_tin" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/nxb.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
