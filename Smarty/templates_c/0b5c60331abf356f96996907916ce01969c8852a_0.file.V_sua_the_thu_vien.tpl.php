<?php
/* Smarty version 3.1.33, created on 2018-11-06 17:56:07
  from 'E:\QL Sach\views\the_thu_vien\V_sua_the_thu_vien.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be1d5b78adf30_58788270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b5c60331abf356f96996907916ce01969c8852a' => 
    array (
      0 => 'E:\\QL Sach\\views\\the_thu_vien\\V_sua_the_thu_vien.tpl',
      1 => 1541526965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be1d5b78adf30_58788270 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">perm_identity</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Cập Nhật -
                <small class="category"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</small>
            </h4>
            <form action="/thethuvien.php/?action=capnhat&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Ngày Bắt Đầu</label>
                            <input name="ngay_batdau" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ngay_batdau'] ? $_smarty_tpl->tpl_vars['item']->value['ngay_batdau'] : '';?>
" type="text" class="form-control datepicker" value="10/10/2018">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Ngày Kết Thúc</label>
                            <input name="ngay_ketthuc" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ngay_ketthuc'] ? $_smarty_tpl->tpl_vars['item']->value['ngay_ketthuc'] : '';?>
" type="text" class="form-control datepicker" value="17/10/1993">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ghi Chú</label>
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <textarea name="ghi_chu" class="form-control" rows="5"><?php echo $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] ? $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] : '';?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/thethuvien.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
