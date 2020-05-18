<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Addition a product</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Code</label>
                    <input type="text" class="form-control" name="code" placeholder="Numbers code" required>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control" name="type" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" placeholder="$" required>
                </div>
                <div class="form-group">
                    <label>Numbers</label>
                    <input type="text" class="form-control" name="numbers" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Date created</label>
                    <input type="text" class="form-control" name="create_date" placeholder="year-month-date" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" placeholder="" required>
                <button type="submit" class="btn btn-primary">Addition</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>

