<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>welcome <?php print($person->name);?> </title>
</head>
<body>
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
    </tr>
    <?php
    echo '<tr><td>' . $person->name . '</td><td>' . $person->birthday
        . '</td><td>' . $person->description . '</td></tr>';
    ?>
</table>
<a href="index.php"><h1>Back to List</h1></a>

</body>

</html>