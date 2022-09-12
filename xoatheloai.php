<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

</body>
</html> -->
<?php
    include "control.php";
    $getdata=new data;
    $del=$getdata->del_theloai($_GET['id']);
    if($del)header("location:themtheloai.php");else echo "lỗi";
?>