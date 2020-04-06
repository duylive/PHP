<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .thumbnail{
            height: 60px;
            width: 100px;
            overflow: hidden;
        }
        .thumbnail img{
            width:100%;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("name" => "Mai Văn Hoàn", "birthday" => "1983-08-20", "address" => "Hà Nội", "photo" => "images/img1.jpg"),
        "2" =>array("name" => "Nguyễn Văn Nam", "birthday" => "1983-08-21", "address" => "Bắc Giang", "photo" => "images/img2.jpg"),
        "3" =>array("name" => "Nguyễn Thái Hòa", "birthday" => "1983-08-22", "address" => "Nam Định", "photo" => "images/img3.jpg"),
        "4" =>array("name" => "Trần Đăng Khoa", "birthday" => "1983-08-17", "address" => "Hà Tây", "photo" => "images/img4.jpg"),
        "5" =>array("name" => "Nguyễn Đình Thi", "birthday" => "1983-08-19", "address" => "Hà Nội", "photo" => "images/img5.jpg")
    );
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['name']."</td>";
        echo "<td>".$values['birthday']."</td>";
        echo "<td>".$values['address']."</td>";
        echo "<td><div class='thumbnail'><image src = '".$values['photo']."'/></div></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
