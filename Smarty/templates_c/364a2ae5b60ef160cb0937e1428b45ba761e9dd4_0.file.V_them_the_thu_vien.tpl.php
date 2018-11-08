<?php
/* Smarty version 3.1.33, created on 2018-11-08 11:49:47
  from 'F:\ql_sach\views\the_thu_vien\V_them_the_thu_vien.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be422db6ca3d3_75128409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '364a2ae5b60ef160cb0937e1428b45ba761e9dd4' => 
    array (
      0 => 'F:\\ql_sach\\views\\the_thu_vien\\V_them_the_thu_vien.tpl',
      1 => 1541667393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be422db6ca3d3_75128409 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/thethuvien.php/?action=themmoi" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Ngày Bắt Đầu</label>
                            <input name="ngay_batdau" type="text" class="form-control datepicker" value="10/10/2018">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Ngày Kết Thúc</label>
                            <input name="ngay_ketthuc" type="text" class="form-control datepicker" value="17/10/1993">
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
                <a href="/thethuvien.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
