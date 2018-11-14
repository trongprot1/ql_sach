<?php
/* Smarty version 3.1.33, created on 2018-11-14 11:57:20
  from 'F:\ql_sach\views\muon_tra\V_sua_muon_tra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec0da0a293b8_70341246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec5159f21f94ea44a953a646b803a81948f545d' => 
    array (
      0 => 'F:\\ql_sach\\views\\muon_tra\\V_sua_muon_tra.tpl',
      1 => 1542196040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec0da0a293b8_70341246 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/muontra.php/?action=capnhat&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Số Thẻ</label>
                            <input name="so_the" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['so_the'] ? $_smarty_tpl->tpl_vars['item']->value['so_the'] : '';?>
" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Mã Nhân Viên</label>
                            <input name="ma_nhanvien" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ma_nhanvien'] ? $_smarty_tpl->tpl_vars['item']->value['ma_nhanvien'] : '';?>
" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ngày Mượn</label>
                            <div class="form-group label-floating">
                                <label class="control-label">Ngày Mượn</label>
                                <input name="ngay_muon" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ngay_muon'] ? $_smarty_tpl->tpl_vars['item']->value['ngay_muon'] : '';?>
" type="text" class="form-control datetimepicker" value="10/10/2018">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                <tr>
                                    <th class="disabled-sorting text-right"></th>
                                    <th>Id</th>
                                    <th>Tên Sách</th>
                                    <th>Tác Giả</th>
                                    <th>Thể Loại</th>
                                    <th>NXB</th>
                                    <th>Năm Xuất Bản</th>
                                    <th>Hình Ảnh</th>
                                    <th>Ghi Chú</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>

                                    <tr>
                                        <td><input name="ma_sach" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="radio" class="form-control" <?php echo $_smarty_tpl->tpl_vars['item']->value['ma_sach'] == $_smarty_tpl->tpl_vars['value']->value['id'] ? "checked" : '';?>
></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['value']->value['ten_sach'];?>
</strong></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['ma_tacgia'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['ma_theloai'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['ma_nxb'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nam_xuatban'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['images'];?>
</td>
                                        <td><?php echo mb_strimwidth($_smarty_tpl->tpl_vars['value']->value['ghi_chu'],0,100,'...');?>
</td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="/muontra.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
