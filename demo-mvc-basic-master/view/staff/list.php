<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<a href="index.php?page=add">Create</a>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Group</th>
        <th></th>
    </tr>

    <?php foreach ($staffs as $key => $staff): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $staff->name ?></td>
        <td><?php echo $staff->phone ?></td>
        <td><?php echo $staff->address ?></td>
        <td><?php echo $staff->email ?></td>
        <td><a href="index.php?page=groups&action=show-staffs&group_id=<?php echo $staff->group['id'] ?>"><?php echo $staff->group['name'] ?></a></td>
        <td>
            <a href="index.php?page=delete&id=<?php echo $staff->id ?>" onclick="return confirm('Ban chac chan muon xoa?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
