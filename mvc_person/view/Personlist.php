<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Welcome Demo</title>
</head>
<body>
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
    </tr>
<?php
foreach ($persons as $name => $person) {
    echo '<tr><td><a href="index.php?person=' . $person->name . '">'
        . $person->name . '</a></td><td>' . $person->birthday
        . '</td><td>' . $person->description . '</td></tr>';
}
?>
</table>
</body>
</html>
