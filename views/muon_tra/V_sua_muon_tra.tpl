{foreach $arr as $item}
{/foreach}
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">perm_identity</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Cập Nhật -
                <small class="category">{$title}</small>
            </h4>
            <form action="/muontra.php/?action=capnhat&id={$item['id']}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Số Thẻ</label>
                            <input name="so_the" value="{($item['so_the'])?$item['so_the']:""}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Mã Nhân Viên</label>
                            <input name="ma_nhanvien" value="{($item['ma_nhanvien'])?$item['ma_nhanvien']:""}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ngày Mượn</label>
                            <div class="form-group label-floating">
                                <label class="control-label">Ngày Mượn</label>
                                <input name="ngay_muon" value="{($item['ngay_muon'])?$item['ngay_muon']:""}" type="text" class="form-control datetimepicker" value="10/10/2018">
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
                                {foreach $sach as $value}

                                    <tr>
                                        <td><input name="ma_sach" value="{$value['id']}" type="radio" class="form-control" {($item['ma_sach'] == $value['id'])?"checked":""}></td>
                                        <td>{$value['id']}</td>
                                        <td><strong>{$value['ten_sach']}</strong></td>
                                        <td>{$value['ma_tacgia']}</td>
                                        <td>{$value['ma_theloai']}</td>
                                        <td>{$value['ma_nxb']}</td>
                                        <td>{$value['nam_xuatban']}</td>
                                        <td>{$value['images']}</td>
                                        <td>{mb_strimwidth($value['ghi_chu'], 0, 100, '...')}</td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="/muontra.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>