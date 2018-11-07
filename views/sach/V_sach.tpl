<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">person</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Danh Sách - {$title}</h4>
                <div class="toolbar">
                    <a href="/sach.php/?action=them" class="btn btn-success">Thêm<div class="ripple-container"></div></a>
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Sách</th>
                            <th>Tác Giả</th>
                            <th>Thể Loại</th>
                            <th>NXB</th>
                            <th>Năm Xuất Bản</th>
                            <th>Hình Ảnh</th>
                            <th>Ghi Chú</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Tên Sách</th>
                            <th>Tác Giả</th>
                            <th>Thể Loại</th>
                            <th>NXB</th>
                            <th>Năm Xuất Bản</th>
                            <th>Hình Ảnh</th>
                            <th>Ghi Chú</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        {foreach $arr as $item}

                            <tr>
                                <td>{$item['id']}</td>
                                <td>{$item['ten_sach']}</td>
                                <td>{$item['ma_tacgia']}</td>
                                <td>{$item['ma_theloai']}</td>
                                <td>{$item['ma_nxb']}</td>
                                <td>{$item['nam_xuatban']}</td>
                                <td>{$item['images']}</td>
                                <td>{$item['ghi_chu']}</td>
                                <td class="text-right">
                                    <a href="/sach.php?action=xem&id={$item['id']}" class="btn btn-simple btn-info btn-icon like">Xem</a>
                                    <a href="/sach.php?action=xoa&id={$item['id']}" class="btn btn-simple btn-danger btn-icon remove">Xoá</a>
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
{var_dump($arr)}