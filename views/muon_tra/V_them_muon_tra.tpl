<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">perm_identity</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Thêm Mới -
                <small class="category">{$title}</small>
            </h4>
            <form action="/muontra.php/?action=themmoi" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Số Thẻ</label>
                            <input name="so_the" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Mã Nhân Viên</label>
                            <input name="ma_nhanvien" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ngày Mượn</label>
                            <div class="form-group label-floating">
                                <label class="control-label">Ngày Mượn</label>
                                <input name="ngay_muon" type="text" class="form-control datetimepicker" value="10/10/2018">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                <tr>
                                    <th class="disabled-sorting text-right"></th>
                                    <th>Id</th>
                                    <th>Tên Sách</th>
                                    <th>Tác Giả</th>
                                    <th>Thể Loại</th>
                                    <th>NXB</th>
                                    <th>Năm Xuất Bản</th>
                                    <th>Hình Ảnh</th>
                                    <th>Ghi Chú</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach $arr as $item}

                                    <tr>
                                        <td><input name="ma_sach[]" value="{$item['id']}" type="checkbox" class="form-control"></td>
                                        <td>{$item['id']}</td>
                                        <td><strong>{$item['ten_sach']}</strong></td>
                                        <td>{$item['ma_tacgia']}</td>
                                        <td>{$item['ma_theloai']}</td>
                                        <td>{$item['ma_nxb']}</td>
                                        <td>{$item['nam_xuatban']}</td>
                                        <td>{$item['images']}</td>
                                        <td>{mb_strimwidth($item['ghi_chu'], 0, 100, '...')}</td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="/muontra.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Thêm Mới</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>