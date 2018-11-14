<?php
/* Smarty version 3.1.33, created on 2018-11-14 12:16:40
  from 'F:\ql_sach\views\ct_muontra\V_ct_muontra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec1228eacb38_89067290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c6338cf135b20f14bd098da404c2c2ab0cd29f1' => 
    array (
      0 => 'F:\\ql_sach\\views\\ct_muontra\\V_ct_muontra.tpl',
      1 => 1542197798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec1228eacb38_89067290 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">person</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Danh Sách - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Mã Mượn Trả</th>
                            <th>Mã Sách</th>
                            <th>Trạng Thái</th>
                            <th>Ngày Trả</th>
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
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_muontra'];?>
</strong></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_sach'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['da_tra'] == "0" ? "Chưa Trả" : "Đã Trả";?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ngay_tra'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ghi_chu'];?>
</td>
                                <td class="text-right">
                                    <a href="/index.php?action=xem&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-simple btn-info btn-icon like">Xem</a>
                                    <a href="/index.php?action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
