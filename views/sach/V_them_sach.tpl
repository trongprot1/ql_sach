<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">perm_identity</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Thêm Mới -
                    <small class="category">{$title}</small>
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
                                {foreach $nxb as $list_nxb}
                                    <option value="{$list_nxb['id']}" >{$list_nxb['ten_nxb']}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="ma_tacgia" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Tác Giả" data-size="7">
                                {foreach $tacgia as $list_tacgia}
                                    <option value="{$list_tacgia['id']}" >{$list_tacgia['ten_tacgia']}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="ma_theloai" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Thể Loại" data-size="7">
                                {foreach $theloai as $list_theloai}
                                    <option value="{$list_theloai['id']}" >{$list_theloai['ten_theloai']}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <textarea name="ghi_chu" class="form-control" rows="15"></textarea>
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
</div>