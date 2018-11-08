<?php
/* Smarty version 3.1.33, created on 2018-11-08 11:49:23
  from 'F:\ql_sach\views\nxb\V_sua_nxb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be422c33cac77_74517429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77ad7b02d6627b61ef22348282797cf882e2d00a' => 
    array (
      0 => 'F:\\ql_sach\\views\\nxb\\V_sua_nxb.tpl',
      1 => 1541677762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be422c33cac77_74517429 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/nxb.php/?action=capnhat&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Nhà Xuất Bản</label>
                            <input name="ten_nxb" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_nxb'] ? $_smarty_tpl->tpl_vars['item']->value['ten_nxb'] : '';?>
" type="text" class="form-control">
                        </div>
                    </div><div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Email</label>
                            <input name="email" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'] ? $_smarty_tpl->tpl_vars['item']->value['email'] : '';?>
" type="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Địa Chỉ</label>
                            <input name="dia_chi" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['dia_chi'] ? $_smarty_tpl->tpl_vars['item']->value['dia_chi'] : '';?>
" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Thông Tin</label>
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <textarea name="thong_tin" class="form-control" rows="15"><?php echo $_smarty_tpl->tpl_vars['item']->value['thong_tin'] ? $_smarty_tpl->tpl_vars['item']->value['thong_tin'] : '';?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/nxb.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
