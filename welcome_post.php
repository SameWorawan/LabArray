<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>POST Result</title>

    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: #eef2f7;
            padding: 40px;
        }
        .box {
            background: #fff;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 12px rgba(0,0,0,0.15);
        }
        h2 {
            color: #2a4d8f;
            text-align: center;
        }
        p { font-size: 18px; }
        .back { text-align: center; margin-top: 20px; }
        a {
            background: #2a4d8f; color: white;
            padding: 10px 15px; text-decoration: none;
            border-radius: 5px;
        }
        a:hover { background: #1d3b70; }
    </style>
</head>

<body>

<div class="box">
    <h2>POST Result</h2>

    <?php
    $fname = isset($_POST["fname"]) ? $_POST["fname"] : "";
    $lname = isset($_POST["lname"]) ? $_POST["lname"] : "";

    if ($fname === "" && $lname === "") {
        echo "<p><strong>No data received.</strong></p>";
    } else {
        echo "<p>First Name: <strong>$fname</strong></p>";
        echo "<p>Last Name: <strong>$lname</strong></p>";
    }
    ?>

    <div class="back">
        <a href="form_handling_post.php">Back to Form</a>
    </div>
</div>

</body>
</html>
