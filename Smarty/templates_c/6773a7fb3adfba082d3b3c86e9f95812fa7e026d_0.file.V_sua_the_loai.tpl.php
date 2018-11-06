<?php
/* Smarty version 3.1.33, created on 2018-11-06 15:36:32
  from 'E:\QL Sach\views\the_loai\V_sua_the_loai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be1b500d94b52_97170665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6773a7fb3adfba082d3b3c86e9f95812fa7e026d' => 
    array (
      0 => 'E:\\QL Sach\\views\\the_loai\\V_sua_the_loai.tpl',
      1 => 1541518587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be1b500d94b52_97170665 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/theloai.php/?action=capnhat&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Tác Giả</label>
                            <input name="ten_theloai" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_theloai'] ? $_smarty_tpl->tpl_vars['item']->value['ten_theloai'] : '';?>
" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <a href="/theloai.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
