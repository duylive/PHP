<?php

if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới blog</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề" required>
                </div>
                <div class="form-group">
                    <label>Teaser</label>
                    <input type="text" class="form-control" name="teaser" placeholder="Nhập lời tựa" required>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" class="form-control" name="content" placeholder="Nhập nội dung" required>
                </div>
                <div class="form-group">
                    <label>Created</label>
                    <input type="text" class="form-control" name="created" placeholder="Nhập ngày viết" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>

