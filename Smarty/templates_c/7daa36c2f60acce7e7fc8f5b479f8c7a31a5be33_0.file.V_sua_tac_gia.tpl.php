<?php
/* Smarty version 3.1.33, created on 2018-11-06 10:56:49
  from 'F:\ql_sach\views\tac_gia\V_sua_tac_gia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be173713335d4_82862525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7daa36c2f60acce7e7fc8f5b479f8c7a31a5be33' => 
    array (
      0 => 'F:\\ql_sach\\views\\tac_gia\\V_sua_tac_gia.tpl',
      1 => 1541501807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be173713335d4_82862525 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/tacgia.php/?action=capnhat&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Tác Giả</label>
                            <input name="ten_tacgia" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_tacgia'] ? $_smarty_tpl->tpl_vars['item']->value['ten_tacgia'] : '';?>
" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Website</label>
                            <input name="website" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['website'] ? $_smarty_tpl->tpl_vars['item']->value['website'] : '';?>
" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ghi Chú</label>
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <textarea name="ghi_chu" class="form-control" rows="5"><?php echo $_smarty_tpl->tpl_vars['item']->value['ghichu'] ? $_smarty_tpl->tpl_vars['item']->value['ghichu'] : '';?>
</textarea>
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
