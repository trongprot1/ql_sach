<?php
/* Smarty version 3.1.33, created on 2018-11-08 15:36:55
  from 'E:\QL Sach\views\nhan_vien\V_nhan_vien.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be45817d0fe39_87586120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d549aa4c46784d83bbb9bc02ab2e040017b4037' => 
    array (
      0 => 'E:\\QL Sach\\views\\nhan_vien\\V_nhan_vien.tpl',
      1 => 1541691414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be45817d0fe39_87586120 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_nhanvien'];?>
</strong></td>
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
</div><?php }
}
