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
            <form action="/nxb.php/?action=capnhat&id={$item['id']}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Tác Giả</label>
                            <input name="ten_nxb" value="{($item['ten_nxb'])?$item['ten_nxb']:""}" type="text" class="form-control">
                        </div>
                    </div><div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Email</label>
                            <input name="email" value="{($item['email'])?$item['email']:""}" type="email" class="form-control">
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
                            <label>Thông Tin</label>
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <textarea name="thong_tin" class="form-control" rows="5">{($item['thong_tin'])?$item['ten_nxb']:""}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/nxb.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>