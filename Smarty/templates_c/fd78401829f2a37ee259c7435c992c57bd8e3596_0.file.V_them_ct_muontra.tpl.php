<?php
/* Smarty version 3.1.33, created on 2018-11-14 11:16:57
  from 'F:\ql_sach\views\ct_muontra\V_them_ct_muontra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec0429911186_70657840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd78401829f2a37ee259c7435c992c57bd8e3596' => 
    array (
      0 => 'F:\\ql_sach\\views\\ct_muontra\\V_them_ct_muontra.tpl',
      1 => 1542194216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec0429911186_70657840 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_muontra']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="col-md-8">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">perm_identity</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Thêm Mới -
                <small class="category"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</small>
            </h4>
            <form action="/index.php/?action=themmoi" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Mã Mượn Trả</label>
                            <input name="ma_muontra" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Mã Sách</label>
                            <input name="ma_sach" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['ma_sach'];?>
" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select name="da_tra" class="selectpicker" data-style="btn btn-primary btn-round" title="Trạng Thái" data-size="7">
                            <option value="0" selected>Chưa Trả</option>
                            <option value="1">Đã Trả</option>
                        </select>
                    </div>
                </div>
                <div class="row" id="muontra" hidden>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ngày Trả</label>
                            <div class="form-group label-floating">
                                <input name="ngay_tra" type="text" class="form-control datetimepicker" value="10/10/2018">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ghi Chú</label>
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <textarea name="ghi_chu" class="form-control" rows="15"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/index.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-profile">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_sach']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
            <div class="card-avatar">
                <a href="#">
                    <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['sach']->value['images'] ? $_smarty_tpl->tpl_vars['sach']->value['images'] : '../assets/img/faces/marc.jpg';?>
" />
                </a>
            </div>
            <div class="card-content">
                <h6 class="category text-gray"><strong>Sách Đã Mượn</strong></h6>
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['sach']->value['ten_sach'] ? $_smarty_tpl->tpl_vars['sach']->value['ten_sach'] : '';?>
</h4>
                <p class="description">
                    <?php echo $_smarty_tpl->tpl_vars['sach']->value['ghi_chu'] ? $_smarty_tpl->tpl_vars['sach']->value['ghi_chu'] : '';?>

                </p>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
