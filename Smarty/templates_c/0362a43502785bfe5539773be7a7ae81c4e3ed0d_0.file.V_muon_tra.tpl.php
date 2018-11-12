<?php
/* Smarty version 3.1.33, created on 2018-11-12 15:17:35
  from 'E:\QL Sach\views\muon_tra\V_muon_tra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be9998f44d636_30595086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0362a43502785bfe5539773be7a7ae81c4e3ed0d' => 
    array (
      0 => 'E:\\QL Sach\\views\\muon_tra\\V_muon_tra.tpl',
      1 => 1542035794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be9998f44d636_30595086 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="/muontra.php/?action=them" class="btn btn-success">Thêm<div class="ripple-container"></div></a>
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Số Thẻ</th>
                            <th>Mã Nhân Viên</th>
                            <th>Mã Sách</th>
                            <th>Ngày Mượn</th>
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
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['so_the'];?>
</strong></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_nhanvien'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_sach'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ngay_muon'];?>
</td>
                                <td class="text-right">
                                    <a href="/muontra.php?action=xem&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-simple btn-info btn-icon like">Xem</a>
                                    <a href="/muontra.php?action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
