<?php
/* Smarty version 3.1.33, created on 2018-11-07 15:36:47
  from 'E:\QL Sach\views\sach\V_sach.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be3068f0e9188_59406614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49509098150f8236c9478ee8a183186849f4bf5e' => 
    array (
      0 => 'E:\\QL Sach\\views\\sach\\V_sach.tpl',
      1 => 1541605006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3068f0e9188_59406614 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="/sach.php/?action=them" class="btn btn-success">Thêm<div class="ripple-container"></div></a>
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Sách</th>
                            <th>Tác Giả</th>
                            <th>Thể Loại</th>
                            <th>NXB</th>
                            <th>Năm Xuất Bản</th>
                            <th>Hình Ảnh</th>
                            <th>Ghi Chú</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Tên Sách</th>
                            <th>Tác Giả</th>
                            <th>Thể Loại</th>
                            <th>NXB</th>
                            <th>Năm Xuất Bản</th>
                            <th>Hình Ảnh</th>
                            <th>Ghi Chú</th>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_sach'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_tacgia'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_theloai'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_nxb'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nam_xuatban'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['images'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ghi_chu'];?>
</td>
                                <td class="text-right">
                                    <a href="/sach.php?action=xem&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-simple btn-info btn-icon like">Xem</a>
                                    <a href="/sach.php?action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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