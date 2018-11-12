<?php
/* Smarty version 3.1.33, created on 2018-11-10 12:55:47
  from 'E:\QL Sach\views\doc_gia\V_doc_gia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be6d553798fc7_27854230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09d711368768a53b191d41ffa70c5e27b2fc2fff' => 
    array (
      0 => 'E:\\QL Sach\\views\\doc_gia\\V_doc_gia.tpl',
      1 => 1541854305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be6d553798fc7_27854230 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="/docgia.php/?action=them" class="btn btn-success">Thêm<div class="ripple-container"></div></a>
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Đọc Giả</th>
                            <th>Email</th>
                            <th>Phái</th>
                            <th>Ngày Sinh>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Số Thẻ</th>
                            <th>Ghi Chú</th>
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
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_docgia'];?>
</strong></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['phai'] == 1 ? "Nữ" : "Nam";?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ngay_sinh'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['diachi'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['so_dienthoai'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['so_the'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ghi_chu'];?>
</td>
                                <td class="text-right">
                                    <a href="/docgia.php?action=xem&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-simple btn-info btn-icon like">Xem</a>
                                    <a href="/docgia.php?action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
