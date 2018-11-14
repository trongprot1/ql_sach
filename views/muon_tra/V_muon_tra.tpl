<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">person</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Danh Sách - {$title}</h4>
                <div class="toolbar">
                    <a href="/muontra.php/?action=them" class="btn btn-success">Thêm<div class="ripple-container"></div></a>
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Số Thẻ Thư Viện</th>
                            <th>Mã Nhân Viên</th>
                            <th>Mã Sách</th>
                            <th>Ngày Mượn</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $arr as $item}
                            <tr>
                                <td>{$item['id']}</td>
                                <td><strong>{$item['so_the']}</strong></td>
                                <td>{$item['ma_nhanvien']}</td>
                                <td>{$item['ma_sach']}</td>
                                <td>{$item['ngay_muon']}</td>
                                <td class="text-right">
                                    <a href="/muontra.php?action=xem&id={$item['id']}" class="btn btn-simple btn-info btn-icon view">Xem</a>
                                    <a href="/muontra.php?action=xoa&id={$item['id']}" class="btn btn-simple btn-danger btn-icon remove">Xoá</a>
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
</div>