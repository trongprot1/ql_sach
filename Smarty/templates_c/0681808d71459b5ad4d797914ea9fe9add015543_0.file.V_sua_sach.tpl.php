<?php
/* Smarty version 3.1.33, created on 2018-11-08 15:38:58
  from 'E:\QL Sach\views\sach\V_sua_sach.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be458924f8fa7_93541828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0681808d71459b5ad4d797914ea9fe9add015543' => 
    array (
      0 => 'E:\\QL Sach\\views\\sach\\V_sua_sach.tpl',
      1 => 1541684268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be458924f8fa7_93541828 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">perm_identity</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Chi Tiết -
                    <small class="category">Nhân Viên</small>
                </h4>
                <form action="/sach.php/?action=capnhat&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Tên Sách</label>
                                <input name="ten_sach" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_sach'] ? $_smarty_tpl->tpl_vars['item']->value['ten_sach'] : '';?>
" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group label-floating">
                                <label class="control-label">Năm Xuất Bản</label>
                                <input name="nam_xuatban" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['nam_xuatban'] ? $_smarty_tpl->tpl_vars['item']->value['nam_xuatban'] : '';?>
" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select name="ma_nxb" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Nhà Xuất Bản" data-size="7">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nxb']->value, 'list_nxb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list_nxb']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['list_nxb']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['list_nxb']->value['id'] == $_smarty_tpl->tpl_vars['item']->value['ma_nxb'] ? "selected" : '';?>
 ><?php echo $_smarty_tpl->tpl_vars['list_nxb']->value['ten_nxb'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="ma_tacgia" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Tác Giả" data-size="7">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tacgia']->value, 'list_tacgia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list_tacgia']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['list_tacgia']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['list_tacgia']->value['id'] == $_smarty_tpl->tpl_vars['item']->value['ma_tacgia'] ? "selected" : '';?>
 ><?php echo $_smarty_tpl->tpl_vars['list_tacgia']->value['ten_tacgia'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="ma_theloai" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Thể Loại" data-size="7">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theloai']->value, 'list_theloai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list_theloai']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['list_theloai']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['list_theloai']->value['id'] == $_smarty_tpl->tpl_vars['item']->value['ma_theloai'] ? "selected" : '';?>
><?php echo $_smarty_tpl->tpl_vars['list_theloai']->value['ten_theloai'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <textarea name="ghi_chu" class="form-control" rows="15"> <?php echo $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] ? $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] : '';?>
</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fileinput fileinput-new text-center" style="margin-top: 24px" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['images'] ? $_smarty_tpl->tpl_vars['item']->value['images'] : "../assets/img/faces/avatar.jpg";?>
" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Chọn Hình Ảnh</span>
                                        <span class="fileinput-exists">Đổi</span>
                                        <input type="file" name="images" />
                                    </span>
                                    <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Xoá </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/sach.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                    <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="#">
                    <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['images'] ? $_smarty_tpl->tpl_vars['item']->value['images'] : '../assets/img/faces/marc.jpg';?>
" />
                </a>
            </div>
            <div class="card-content">
                <h6 class="category text-gray"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h6>
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_sach'] ? $_smarty_tpl->tpl_vars['item']->value['ten_sach'] : '';?>
</h4>
                <p class="description">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] ? $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] : '';?>

                </p>
            </div>
        </div>
    </div>
</div>

<?php echo var_dump($_smarty_tpl->tpl_vars['arr']->value);
}
}
