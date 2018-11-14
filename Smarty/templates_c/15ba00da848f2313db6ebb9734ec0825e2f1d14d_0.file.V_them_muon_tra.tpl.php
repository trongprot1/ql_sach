<?php
/* Smarty version 3.1.33, created on 2018-11-14 11:30:42
  from 'F:\ql_sach\views\muon_tra\V_them_muon_tra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec076242c179_21158926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15ba00da848f2313db6ebb9734ec0825e2f1d14d' => 
    array (
      0 => 'F:\\ql_sach\\views\\muon_tra\\V_them_muon_tra.tpl',
      1 => 1542193153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec076242c179_21158926 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="/muontra.php/?action=themmoi" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Số Thẻ</label>
                            <input name="so_the" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Mã Nhân Viên</label>
                            <input name="ma_nhanvien" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ngày Mượn</label>
                            <div class="form-group label-floating">
                                <input name="ngay_muon" type="text" class="form-control datetimepicker" value="10/10/2018">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                                    <tr>
                                        <td><input name="ma_sach" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="radio" class="form-control"></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_sach'];?>
</strong></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_tacgia'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_theloai'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_nxb'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nam_xuatban'];?>
</td>
                                        <td><img src="../<?php echo $_smarty_tpl->tpl_vars['item']->value['images'];?>
" style="width: 150px;height: 150px"></td>
                                        <td><?php echo mb_strimwidth($_smarty_tpl->tpl_vars['item']->value['ghi_chu'],0,100,'...');?>
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
                <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div><?php }
}
