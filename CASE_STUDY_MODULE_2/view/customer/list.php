<style>
    body {
        background-color:sandybrown;
    }
</style>
<h2 style="color:green;">List of customers</h2>
<a href="./index.php?page=add">Addition a new customer</a>
<table class="table">
    <thead>
    <tr>
        <th style="color:red;">Numerical order</th>
        <th style="color:red;">Name</th>
        <th style="color:orangered;">Birthday</th>
        <th style="color:purple;">Address</th>
        <th style="color:yellowgreen;">Email</th>
        <th style="color:yellow">Phone</th>
        <th style="color:yellow">Gender</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $key => $customer): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $customer->name ?></td>
        <td><?php echo $customer->birthday ?></td>
        <td><?php echo $customer->address ?></td>
        <td><?php echo $customer->email ?></td>
        <td><?php echo $customer->phone ?></td>
        <td><?php echo $customer->gender ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $customer->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $customer->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

