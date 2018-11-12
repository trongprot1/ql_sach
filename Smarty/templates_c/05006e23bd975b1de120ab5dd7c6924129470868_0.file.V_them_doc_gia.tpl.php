<?php
/* Smarty version 3.1.33, created on 2018-11-10 13:01:39
  from 'E:\QL Sach\views\doc_gia\V_them_doc_gia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be6d6b33c26f0_28130798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05006e23bd975b1de120ab5dd7c6924129470868' => 
    array (
      0 => 'E:\\QL Sach\\views\\doc_gia\\V_them_doc_gia.tpl',
      1 => 1541854893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be6d6b33c26f0_28130798 (Smarty_Internal_Template $_smarty_tpl) {
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
                <form action="/docgia.php/?action=themmoi" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Tên Đọc Giả</label>
                                <input name="ten_docgia" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Địa Chỉ Email</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select name="phai" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Phái" data-size="7">
                                <option value="0" selected>Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Ngày Sinh</label>
                                <input name="ngay_sinh" type="text" class="form-control datepicker" value="10/10/1993">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Số Điện Thoại</label>
                                <input name="so_dienthoai" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Địa Chỉ</label>
                                <input name="dia_chi" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Số Thẻ Thư Viện</label>
                                <input name="so_the" type="text" class="form-control">
                            </div>
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
                    <a href="/docgia.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                    <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
