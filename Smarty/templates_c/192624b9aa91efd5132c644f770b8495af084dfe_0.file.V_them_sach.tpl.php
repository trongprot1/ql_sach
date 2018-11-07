<?php
/* Smarty version 3.1.33, created on 2018-11-07 19:59:55
  from 'E:\QL Sach\views\sach\V_them_sach.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be3443bf156d9_17118816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '192624b9aa91efd5132c644f770b8495af084dfe' => 
    array (
      0 => 'E:\\QL Sach\\views\\sach\\V_them_sach.tpl',
      1 => 1541620794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3443bf156d9_17118816 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">perm_identity</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Thêm Mới -
                    <small class="category"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</small>
                </h4>
                <form action="/sach.php/?action=themmoi" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Tên Sách</label>
                                <input name="ten_sach" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group label-floating">
                                <label class="control-label">Năm Xuất Bản</label>
                                <input name="nam_xuatban" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select name="ma_nxb" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Nhà Xuất Bản" data-size="7">
                                <option value="0" >Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="ma_theloai" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Thể Loại" data-size="7">
                                <option value="0" >Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="ma_tacgia" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Tác Giả" data-size="7">
                                <option value="0" >Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <textarea name="ghi_chu" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fileinput fileinput-new text-center" style="margin-top: 24px" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="../../assets/img/image_placeholder.jpg" alt="...">
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
                    <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
