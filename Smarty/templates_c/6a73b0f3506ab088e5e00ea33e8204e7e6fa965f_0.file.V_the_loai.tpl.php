<?php
/* Smarty version 3.1.33, created on 2018-11-08 16:19:21
  from 'F:\ql_sach\views\the_loai\V_the_loai.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be3ff99e7a001_54945857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a73b0f3506ab088e5e00ea33e8204e7e6fa965f' => 
    array (
      0 => 'F:\\ql_sach\\views\\the_loai\\V_the_loai.tpl',
      1 => 1541667393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3ff99e7a001_54945857 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="/theloai.php/?action=them" class="btn btn-success">Thêm<div class="ripple-container"></div></a>
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Thể Loại</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Tên Thể Loại</th>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_theloai'];?>
</td>
                                <td class="text-right">
                                    <a href="/theloai.php?action=xem&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-simple btn-info btn-icon like">Xem</a>
                                    <a href="/theloai.php?action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
