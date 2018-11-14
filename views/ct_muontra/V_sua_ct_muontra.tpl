{foreach $arr as $value}
{/foreach}
<div class="col-md-8">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">perm_identity</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Thêm Mới -
                <small class="category">{$title}</small>
            </h4>
            <form action="/index.php/?action=capnhat&id={$value['id']}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Mã Mượn Trả</label>
                            <input name="ma_muontra" value="{$value['ma_muontra']}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Mã Sách</label>
                            <input name="ma_sach" value="{$value['ma_sach']}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select id="da_tra" name="da_tra" class="selectpicker" data-style="btn btn-primary btn-round" title="Trạng Thái" data-size="7">
                            <option value="0" {($value['da_tra'] == "0")?"selected":""}>Chưa Trả</option>
                            <option value="1" {($value['da_tra'] == "1")?"selected":""}>Đã Trả</option>
                        </select>
                    </div>
                </div>
                <div class="row" id="muontra" hidden>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ngày Trả</label>
                            <div class="form-group label-floating">
                                <input name="ngay_tra" type="text" class="form-control datetimepicker">
                            </div>
                        </div>
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
                <a href="/index.php" class="btn btn-primary">Quay Lại<div class="ripple-container"></div></a>
                <button type="submit" class="btn btn-rose pull-right">Cập Nhật</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-profile">
        {foreach $arr_sach as $sach}
            <div class="card-avatar">
                <a href="#">
                    <img class="img" src="{($sach['images'])? $sach['images']:'../assets/img/faces/marc.jpg'}" />
                </a>
            </div>
            <div class="card-content">
                <h6 class="category text-gray"><strong>Sách Đã Mượn</strong></h6>
                <h4 class="card-title">{($sach['ten_sach'])?$sach['ten_sach']:""}</h4>
                <p class="description">
                    {($sach['ghi_chu'])?$sach['ghi_chu']:""}
                </p>
            </div>
        {/foreach}
    </div>
</div>