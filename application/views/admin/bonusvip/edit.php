<section class="content-header">
    <h1>
        Thêm mới phần thưởng
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <form id="form" class="form" enctype="multipart/form-data" method="post"
                      action="<?php admin_url("victory/add") ?>">
                    <fieldset>
                        <div class="box-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Tiêu đề:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="title"
                                               value="<?php echo $info->title ?>">
                                    </div>
                                    <div class="col-sm-4"><label class="control-label" for="inputError"
                                                                 style="color: #ff0000"><?php echo form_error('title') ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="imagevalue" value="<?php echo $info->images ?>">

                                <div class="row">
                                    <label class="col-sm-2 control-label">Chọn avatar:</label>

                                    <div class="col-sm-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                                class="btn btn-primary btn-file"><span
                                                    class="fileinput-new">Chọn file </span> <span
                                                    class="fileinput-exists">ảnh</span>
                                         <input type="file" id="userfile" name="avatar"><div
                                                    class="ripple-wrapper"></div></span> <span
                                                class="fileinput-filename"></span></div>
                                        <?php if ($info->images != null): ?>
                                            <img id="imageselect"
                                                 src="<?php echo public_url("uploads/bonusvip/" . $info->images) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php else: ?>
                                            <img id="imageselect" src="../../public/admin/images/no-image.png"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4 successful"><label class="control-label" for="inputError"
                                                                            style="color: #ff0000"> <?php if (isset($message) && $message): ?>
                                                <?php echo $message ?>
                                            <?php endif; ?></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Vippoint:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="vippoint"
                                               value="<?php echo $info->vippoint ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Vin:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="vin"
                                               value="<?php echo $info->vin ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Mô tả:</label>

                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" name="description" rows="5"
                                                  cols="80">
                                            <?php echo $info->description ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Thứ tự hiển thị:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="orderno" value=" <?php echo $info->orderNo ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Tiêu đề page:</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="titlepage"
                                               value="<?php echo $info->titlepage ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Keyword:</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="keyword"
                                               value="<?php echo $info->keyword ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Meta description:</label>

                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" name="metades" cols="80" rows="5">
                                            <?php echo $info->metadescription ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Cập nhật" name="submit"
                                               class="btn btn-primary pull-left">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div>

                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageselect').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#userfile").change(function () {
        readURL(this);
    });
    $(".successful").click(function () {
        $(".successful").hide();
    });
</script>