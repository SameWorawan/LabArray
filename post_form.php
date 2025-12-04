<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP $_POST Example</title>
</head>
<body>

<h1>ตัวอย่างการใช้ PHP $_POST</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ดึงค่าจาก input
    $name = $_POST['fname'];

    // ตรวจสอบช่องว่าง
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>
