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

<form action="" method="post">
    <table>
        <tr>
            <td> Name:</td>
            <td> <input type="text" name="name" required minlength="3"></td>
        </tr>
        <tr>
            <td> Phone:</td>
            <td> <input type="text" name="phone" required minlength="10" maxlength="10"></td>
        </tr>
        <tr>
            <td> Address:</td>
            <td> <input type="text" name="address" required minlength="3"></td>
        </tr>

        <tr>
            <td> Email:</td>
            <td> <input type="email" name="email" required minlength="3"></td>
        </tr>
        <tr>
            <td>Group</td>
            <td>
                <select name="group_id" id="">
                    <?php foreach ($groups as $group): ?>
                    <option value="<?php echo $group->getId() ?>"><?php echo $group->getName() ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn-create-staff" type="submit">Create</button>
            </td>
            <td><a href="index.php" type="">
                    <button type="button">
                        Huy
                    </button></a></td>
        </tr>
        
    </table>
</form>