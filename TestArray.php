<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>PHP Array ตัวอย่างทั้งหมด</title>
</head>
<body>

<h1>ทดสอบ Array แบบ Indexed Arrays</h1>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<hr>

<h1>ทดสอบ Array แบบ Associative Arrays</h1>
<?php
$age = array(
    "Peter" => 35, 
    "Ben" => 37, 
    "Joe" => 43,
    "Mon" => 19
);

echo "Peter is " . $age["Peter"] . " years old.<br>\n";
echo "Ben is " . $age["Ben"] . " years old.<br>\n";
echo "Joe is " . $age["Joe"] . " years old.<br>\n";
echo "Mon is " . $age["Mon"] . " years old.<br>\n";
?>

<hr>

<h1>การใช้ For กับ Indexed Arrays</h1>
<?php
$fruits = array("แอปเปิ้ล", "มะละกอ", "กล้วย", "ส้ม", "องุ่น", "มังคุด", "พุทรา");

$arrlen = count($fruits);

for ($i = 0; $i < $arrlen; $i++) {
    echo $fruits[$i] . "<br>\n";
}
?>

<hr>

<h1>การใช้ Foreach กับ Indexed Arrays</h1>
<?php
foreach ($fruits as $value) {
    echo $value . "<br>\n";
}
?>

<hr>

<h1>การใช้ Foreach กับ Associative Arrays</h1>
<?php
$age = array(
    "Peter" => 35,
    "Ben" => 37,
    "Joe" => 43,
    "Mon" => 19
);

foreach ($age as $name => $years) {
    echo $name . " มีอายุ " . $years . " ปี<br>\n";
}
?>

<hr>

<h1>ตัวอย่าง Multidimensional Array (เพิ่มเติม)</h1>
<?php
$students = array(
    array("John", 20, "IT"),
    array("Anna", 19, "CS"),
    array("Peter", 21, "AI")
);

for ($i = 0; $i < count($students); $i++) {
    echo "ชื่อ: " . $students[$i][0] . 
         " | อายุ: " . $students[$i][1] . 
         " | สาขา: " . $students[$i][2] . "<br>\n";
}
?>

<hr>

<h1>การใช้ Array 2 มิติ (Two-Dimension Array)</h1>

<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";

    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }

    echo "</ul>";
}
?>

</body>
</html>
