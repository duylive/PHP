<h2>Danh sách bài viết</h2>
<a href="./index.php?page=add">Viết bài mới</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tiêu đề</th>
        <th>Lời tựa</th>
        <th>Nội dung</th>
        <th>Ngày viết</th>
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
        <td><?php echo $blog->content ?></td>
        <td><?php echo $blog->created ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $blog->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $blog->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

