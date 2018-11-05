{foreach $arr as $item}
{/foreach}
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">perm_identity</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Thêm Mới -
                    <small class="category">Nhân Viên</small>
                </h4>
                <form action="/nhanvien.php/?action=sua&id={$item['id']}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Tên Nhân Viên</label>
                                <input name="ten_nhan_vien" value="{($item['ten_nhanvien'])?$item['ten_nhanvien']:""}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Địa Chỉ Email</label>
                                <input name="email" value="{($item['email'])?$item['email']:""}" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select name="phai" class="selectpicker" data-style="btn btn-primary btn-round" title="Chọn Phái" data-size="7">
                                <option value="0" {($item['phai'] == "0")?"selected":""}>Nam</option>
                                <option value="1" {($item['phai'] == "1")?"selected":""}>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Ngày Sinh</label>
                                <input name="ngay_sinh" value="{($item['ngay_sinh'])?$item['ngay_sinh']:""}" type="text" class="form-control datepicker" value="10/10/1993">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Số Điện Thoại</label>
                                <input name="dien_thoai" value="{($item['so_dienthoai'])?$item['so_dienthoai']:""}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Địa Chỉ</label>
                                <input name="dia_chi" value="{($item['dia_chi'])?$item['dia_chi']:""}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <textarea name="ghi_chu" class="form-control" rows="5">{($item['ghi_chu'])?$item['ghi_chu']:""}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fileinput fileinput-new text-center" style="margin-top: 24px" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{($item['images'])?$item['images']:"../assets/img/faces/avatar.jpg"}" alt="...">
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
                    <a href="/nhanvien.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
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
                    <img class="img" src="{($item['images'])? $item['images']:'../assets/img/faces/marc.jpg'}" />
                </a>
            </div>
            <div class="card-content">
                <h6 class="category text-gray">Nhân Viên</h6>
                <h4 class="card-title">{($item['ten_nhanvien'])?$item['ten_nhanvien']:""}</h4>
                <p class="description">
                    {($item['ghi_chu'])?$item['ghi_chu']:""}
                </p>
                <a href="#" class="btn btn-rose btn-round">Follow</a>
            </div>
        </div>
    </div>
</div>

{var_dump($arr)}