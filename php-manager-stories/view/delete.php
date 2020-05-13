<h1>Bạn có chắc chắn muốn xóa truyện này</h1>

<h3><?php echo $story->title ; ?></h3>

<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $story->id; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>
