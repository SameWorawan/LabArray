<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Request</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    First Name: <input type="text" name="fname"><br><br>
    Last Name: <input type="text" name="lname"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ใช้ isset ก่อนเพื่อตัด Warning
    $fname = isset($_REQUEST['fname']) ? $_REQUEST['fname'] : "";
    $lname = isset($_REQUEST['lname']) ? $_REQUEST['lname'] : "";

    // ตรวจสอบ First Name
    if (empty($fname)) {
        echo "First name is empty<br>";
    } else {
        echo "First Name: " . $fname . "<br>";
    }

    // ตรวจสอบ Last Name
    if (empty($lname)) {
        echo "Last name is empty<br>";
    } else {
        echo "Last Name: " . $lname . "<br>";
    }
}
?>

</body>
</html>
