<style>
    body {
        background-color: sandybrown;
    }
</style>
<p>
    <a href="index.php" class="btn btn-default">Trở lại trang chủ</a>
</p>
<h1 style="color: red"><?php echo $blog->title; ?></h1>
<hr>
<p style="color: #5900a6"><?php echo $blog->teaser; ?></p>
<hr>
<p style="color: green"><?php echo $blog->content; ?></p>
<hr>
<p style="color: yellow"><?php echo "Hà Nội: ". $blog->created; ?></p>
