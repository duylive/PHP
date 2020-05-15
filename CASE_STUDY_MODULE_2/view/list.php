<style>
    body {
        background-color:sandybrown;
    }
</style>
<h2 style="color:green;">List of guns</h2>
<a href="./index.php?page=add">Create a new gun</a>
<table class="table">
    <thead>
    <tr>
        <th style="color:red;">Name</th>
        <th style="color:orangered;">Series Numbers</th>
        <th style="color:purple;">Brand</th>
        <th style="color:yellowgreen;">Data details</th>
        <th style="color:yellow">Origin</th>
        <th style="color:yellow">Price</th>
        <th style="color:yellow">Status</th>
        <th style="color:yellow">Type</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($guns as $key => $gun): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $gun->name ?></td>
        <td><?php echo $gun->series ?></td>
        <td><?php echo $gun->brand ?></td>
        <td><a href="./index.php?page=view&id=<?php echo $gun->id; ?>" class="btn btn-sm">Details Infomation</a></td>
        <td><?php echo $gun->origin ?></td>
        <td><?php echo $gun->status ?></td>
        <td><?php echo $gun->type_id ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $gun->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $gun->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

