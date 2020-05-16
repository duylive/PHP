<style>
    body {
        background-color: sandybrown;
    }
</style>
<p>
    <a href="index.php" class="btn btn-default">Return</a>
</p>
<h1 style="color: red">Name:  <?php echo $gun->name; ?></h1>
<hr>
<p style="color: #5900a6">Photos: <?php echo $gun->image; ?></p>
<hr>
<p style="color: #5900a6">Series Numbers: <?php echo $gun->series; ?></p>
<hr>
<p style="color: green">Brand: <?php echo $gun->brand; ?></p>
<hr>
<p style="color: green">Details Infomation: <?php echo $gun->content; ?></p>
<hr>
<p style="color: green">Origin Country: <?php echo $gun->origin; ?></p>
<hr>
<p style="color: green">Price: <?php echo $gun->price; ?></p>
<hr>
<p style="color: green">Status: <?php echo $gun->status; ?></p>
<hr>
<p style="color: green">Type_id: <?php echo $gun->type_id; ?></p>
