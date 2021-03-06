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
            <form action="/theloai.php/?action=capnhat&id={$item['id']}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Thể Loại</label>
                            <input name="ten_theloai" value="{($item['ten_theloai'])?$item['ten_theloai']:""}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <a href="/theloai.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>