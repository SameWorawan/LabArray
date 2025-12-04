<!DOCTYPE html>
<html>
<body>

<h1>การใช้ PHP $_GET</h1>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // เช็คว่ามีค่าถูกส่งมาหรือยัง
    if (isset($_GET['fname']) && isset($_GET['lname'])) {

        // รับค่าจากฟอร์ม
        $name = $_GET['fname'];
        $lname = $_GET['lname'];

        // ถ้า First Name ว่าง
        if (empty($name)) {
            echo "Name is empty";
        } else {
            // แสดงชื่อ + นามสกุล
            echo $name . " " . $lname;
        }
    }
}
?>

</body>
</html>
