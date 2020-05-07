<?php
include "database/DBConnect.php";
include "class/CarDB.php";
include "class/Car.php";
include "class/CarManager.php";

$carManager = new CarManager();
$cars = $carManager->index();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php include "view/menu.php"?>
    <div class="col-md-12">
        <a href="view/create.php" class="btn btn-success">Create</a>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cars as $key => $car):?>
                <tr>
                    <th scope="row"><?php echo ++$key ?></th>
                    <td><?php echo $car->getId() ?></td>
                    <td><?php echo $car->getName() ?></td>
                    <td><?php echo $car->getAuthor() ?></td>
                    <td><?php echo $car->getPrice() ?></td>
                    <td><a onclick="return confirm('Ban chac chan muon xoa?')" href="action/delete.php?id=<?php echo $car->getId() ?>" class="btn btn-danger">Delete</a></td>

                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

