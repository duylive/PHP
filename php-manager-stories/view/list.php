<style>
    body {
        background-color:burlywood;
    }
</style>
<h2 style="color:green;">Danh sách truyện</h2>
<a href="./index.php?page=add">Viết truyện mới</a>
<table class="table">
    <thead>
    <tr>
        <th style="color:red;">STT</th>
        <th style="color:orangered;">Tên truyện</th>
        <th style="color:purple;">Thể loại</th>
        <th style="color:yellowgreen;">Lời tựa</th>
        <th style="color:yellow">Nội dung</th>
        <th style="color:green">Tác giả</th>
        <th style="color:blue">Ngày viết</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($storys as $key => $story): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $story->name ?></td>
        <td><?php echo $story->category ?></td>
        <td><?php echo $story->teaser ?></td>
        <td><a href="./index.php?page=view&id=<?php echo $story->id; ?>" class="btn btn-sm">Xem truyện</td>
        <td><?php echo $story->author ?></td>
        <td><?php echo $story->created ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $story->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $story->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

