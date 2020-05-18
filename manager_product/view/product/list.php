<h2 style="color:green;">List of products</h2>
<a href="./index.php?page=add">Addition a new product</a>
<table class="table">
    <thead>
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
        <th>Numbers</th>
        <th>Date created</th>
        <th>Description</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->code ?></td>
        <td><?php echo $product->name ?></td>
        <td><?php echo $product->type ?></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->numbers ?></td>
        <td><?php echo $product->create_date ?></td>
        <td><?php echo $product->description ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

