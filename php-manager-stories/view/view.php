<style>
    body {
        background-color: burlywood;
    }
</style>
<p>
    <a href="index.php" class="btn btn-default">Trở lại trang chủ</a>
</p>
<h1 style="color: red"><?php echo $story->name; ?></h1>
<hr>
<p style="color: #5900a6"><?php echo $story->category; ?></p>
<hr>
<p style="color: green"><?php echo $story->teaser; ?></p>
<hr>
<p style="color:blueviolet"><?php echo $story->content; ?></p>
<hr>
<p style="color:orangered"><?php echo $story->author; ?></p>
<hr>
<p style="color: yellow"><?php echo "Hà Nội: ". $story->created; ?></p>
