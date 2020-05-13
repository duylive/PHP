<h2>Cập nhật truyện</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $story->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $story->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Category</label>
        <textarea name="category" class="form-control"><?php echo $story->category; ?></textarea>
    </div>
    <div class="form-group">
        <label>Teaser</label>
        <textarea name="teaser" class="form-control"><?php echo $story->teaser; ?></textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"><?php echo $story->content; ?></textarea>
    </div>
    <div class="form-group">
        <label>Author</label>
        <textarea name="author" class="form-control"><?php echo $story->author; ?></textarea>
    </div>
    <div class="form-group">
        <label>Created</label>
        <textarea name="created" class="form-control"><?php echo $story->created; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>