<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">perm_identity</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Thêm Mới -
                <small class="category">{$title}</small>
            </h4>
            <form action="/thethuvien.php/?action=themmoi" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Ngày Bắt Đầu</label>
                            <input name="ngay_batdau" type="text" class="form-control datepicker" value="10/10/2018">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Ngày Kết Thúc</label>
                            <input name="ngay_ketthuc" type="text" class="form-control datepicker" value="17/10/1993">
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
                <a href="/thethuvien.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>