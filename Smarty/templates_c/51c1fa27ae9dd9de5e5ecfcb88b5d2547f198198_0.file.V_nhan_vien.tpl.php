<?php
/* Smarty version 3.1.33, created on 2018-11-08 16:19:08
  from 'F:\ql_sach\views\nhan_vien\V_nhan_vien.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be3ff8ca50de8_74341757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51c1fa27ae9dd9de5e5ecfcb88b5d2547f198198' => 
    array (
      0 => 'F:\\ql_sach\\views\\nhan_vien\\V_nhan_vien.tpl',
      1 => 1541667393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3ff8ca50de8_74341757 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">person</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Danh Sách - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="toolbar">
                    <a href="/nhanvien.php/?action=them" class="btn btn-success">Thêm<div class="ripple-container"></div></a>
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Nhân Viên</th>
                            <th>Phái</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Ngày Sinh</th>
                            <th>Số Điện Thoại</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Tên Nhân Viên</th>
                            <th>Phái</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Ngày Sinh</th>
                            <th>Số Điện Thoại</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_nhanvien'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['phai'] == 1 ? "Nữ" : "Nam";?>
</td>
                                <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['dia_chi'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ngay_sinh'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['so_dienthoai'];?>
</td>
                                <td class="text-right">
                                    <a href="/nhanvien.php?action=xem&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-simple btn-info btn-icon like">Xem</a>
                                    <a href="/nhanvien.php?action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-simple btn-danger btn-icon remove">Xoá</a>
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
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
</div>
<?php echo var_dump($_smarty_tpl->tpl_vars['arr']->value);
}
}
