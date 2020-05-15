<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Addition a gun</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Name of gun</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label>Series</label>
                    <input type="text" class="form-control" name="series" placeholder="Series Numbers" required>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <input type="text" class="form-control" name="brand" placeholder="Brand" required>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" class="form-control" name="content" placeholder="Data details" required>
                </div>
                <div class="form-group">
                    <label>Origin</label>
                    <input type="text" class="form-control" name="origin" placeholder="Country" required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" placeholder="$" required>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status" placeholder="Status" required>
                </div>
                <div class="form-group">
                    <label>Type_id</label>
                    <input type="text" class="form-control" name="type_id" placeholder="Id numbers" required>
                </div>
                <button type="submit" class="btn btn-primary">Addition</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>


