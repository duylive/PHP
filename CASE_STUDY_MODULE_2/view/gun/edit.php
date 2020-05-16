<h2>Update infomation</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $gun->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $gun->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Image</label>
        <textarea name="image" class="form-control"><?php echo $gun->image; ?></textarea>
    </div>
    <div class="form-group">
        <label>Series</label>
        <textarea name="series" class="form-control"><?php echo $gun->series; ?></textarea>
    </div>
    <div class="form-group">
        <label>Brand</label>
        <textarea name="brand" class="form-control"><?php echo $gun->brand; ?></textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"><?php echo $gun->content; ?></textarea>
    </div>
    <div class="form-group">
        <label>Origin</label>
        <textarea name="origin" class="form-control"><?php echo $gun->origin; ?></textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <textarea name="price" class="form-control"><?php echo $gun->price; ?></textarea>
    </div>
    <div class="form-group">
        <label>Status</label>
        <textarea name="status" class="form-control"><?php echo $gun->status; ?></textarea>
    </div>
    <div class="form-group">
        <label>Type_id</label>
        <textarea name="type_id" class="form-control"><?php echo $gun->type_id; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>

