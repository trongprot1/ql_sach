<?php
/* Smarty version 3.1.33, created on 2018-11-14 11:57:16
  from 'F:\ql_sach\views\doc_gia\V_sua_doc_gia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec0d9c7ed8d0_75612489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4c8ede36670b164c215cbb592963f8b8113d09' => 
    array (
      0 => 'F:\\ql_sach\\views\\doc_gia\\V_sua_doc_gia.tpl',
      1 => 1542180207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec0d9c7ed8d0_75612489 (Smarty_Internal_Template $_smarty_tpl) {
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
                <form action="/docgia.php/?action=capnhat&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Tên Đọc Giả</label>
                                <input name="ten_docgia" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_docgia'] ? $_smarty_tpl->tpl_vars['item']->value['ten_docgia'] : '';?>
" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Địa Chỉ Email</label>
                                <input name="email" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'] ? $_smarty_tpl->tpl_vars['item']->value['email'] : '';?>
" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select name="phai" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Phái" data-size="7">
                                <option value="0" <?php echo $_smarty_tpl->tpl_vars['item']->value['phai'] == "0" ? "selected" : '';?>
>Nam</option>
                                <option value="1" <?php echo $_smarty_tpl->tpl_vars['item']->value['phai'] == "1" ? "selected" : '';?>
>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Ngày Sinh</label>
                                <input name="ngay_sinh" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ngay_sinh'] ? $_smarty_tpl->tpl_vars['item']->value['ngay_sinh'] : '';?>
" type="text" class="form-control datepicker" value="10/10/1993">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Số Điện Thoại</label>
                                <input name="so_dienthoai" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['so_dienthoai'] ? $_smarty_tpl->tpl_vars['item']->value['so_dienthoai'] : '';?>
" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Địa Chỉ</label>
                                <input name="dia_chi" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['diachi'] ? $_smarty_tpl->tpl_vars['item']->value['diachi'] : '';?>
" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Số Thẻ Thư Viện</label>
                                <input name="so_the" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['so_the'] ? $_smarty_tpl->tpl_vars['item']->value['so_the'] : '';?>
" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <textarea name="ghi_chu" class="form-control" rows="5"><?php echo $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] ? $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] : '';?>
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
                    <a href="/docgia.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
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
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_docgia'] ? $_smarty_tpl->tpl_vars['item']->value['ten_docgia'] : '';?>
</h4>
                <p class="description">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] ? $_smarty_tpl->tpl_vars['item']->value['ghi_chu'] : '';?>

                </p>
                <a href="#" class="btn btn-rose btn-round">Follow</a>
            </div>
        </div>
    </div>
</div><?php }
}
