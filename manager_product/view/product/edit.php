<h2>Update infomation</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
    <div class="form-group">
        <label>Code</label>
        <input type="text" name="code" value="<?php echo $product->code; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Name</label>
        <textarea name="name" class="form-control"><?php echo $product->name; ?></textarea>
    </div>
    <div class="form-group">
        <label>Type</label>
        <textarea name="type" class="form-control"><?php echo $product->type; ?></textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <textarea name="price" class="form-control"><?php echo $product->price; ?></textarea>
    </div>
    <div class="form-group">
        <label>Numbers</label>
        <textarea name="numbers" class="form-control"><?php echo $product->numbers; ?></textarea>
    </div>
    <div class="form-group">
        <label>Date created</label>
        <textarea name="create_date" class="form-control"><?php echo $product->create_date; ?></textarea>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $product->description; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>

