<style>
    body {
        background-color:sandybrown;
    }
</style>
<h2 style="color:green;">Danh sách bài viết</h2>
<a href="./index.php?page=add">Viết bài mới</a>
<table class="table">
    <thead>
    <tr>
        <th style="color:red;">STT</th>
        <th style="color:orangered;">Tiêu đề</th>
        <th style="color:purple;">Lời tựa</th>
        <th style="color:yellowgreen;">Nội dung</th>
        <th style="color:yellow">Ngày viết</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($blogs as $key => $blog): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $blog->title ?></td>
        <td><?php echo $blog->teaser ?></td>
        <td><a href="./index.php?page=view&id=<?php echo $blog->id; ?>" class="btn btn-sm">Xem chi tiết</a></td>
        <td><?php echo $blog->created ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $blog->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $blog->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

