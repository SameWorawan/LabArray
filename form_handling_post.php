<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Handling POST</title>

    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: #f3f6fa;
            padding: 40px;
        }
        .container {
            background: #fff;
            width: 380px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 12px rgba(0,0,0,0.15);
        }
        h1 {
            text-align: center;
            color: #2a4d8f;
            margin-bottom: 20px;
        }
        label { font-weight: bold; }
        input[type=text] {
            width: 100%; padding: 10px; margin: 8px 0 15px 0;
            border-radius: 5px; border: 1px solid #ccc;
        }
        input[type=submit] {
            width: 100%; padding: 12px; border: none;
            background: #2a4d8f; color: white; font-size: 16px;
            border-radius: 5px; cursor: pointer;
        }
        input[type=submit]:hover { background: #1d3b70; }
    </style>
</head>

<body>

<div class="container">
    <h1>Form Post</h1>

    <form action="welcome_post.php" method="post">
        <label>First Name:</label>
        <input type="text" name="fname" placeholder="Enter your first name">

        <label>Last Name:</label>
        <input type="text" name="lname" placeholder="Enter your last name">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
