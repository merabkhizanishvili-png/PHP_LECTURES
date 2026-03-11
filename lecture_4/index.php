<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Form Validation Example</title>

<style>
body{
    font-family: Arial;
}

.container{
    border:1px solid black;
    width:420px;
    padding:15px;
}

.star{
    color:red;
}

.row{
    margin-bottom:10px;
}

label{
    display:inline-block;
    width:70px;
}

textarea{
    width:250px;
    height:80px;
}

.error{
    color:red;
}
</style>

</head>
<body>

<?php

$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (!empty($_POST["website"])) {
        $website = htmlspecialchars($_POST["website"]);
    }

    if (!empty($_POST["comment"])) {
        $comment = htmlspecialchars($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }
}

?>

<div class="container">

<h2>PHP Form Validation Example</h2>
<p><span class="star">*</span> required field</p>

<form method="POST" action="">

<div class="row">
<label>Name:</label>
<input type="text" name="name" value="<?php echo $name; ?>">
<span class="star">*</span>
<span class="error"><?php echo $nameErr; ?></span>
</div>

<div class="row">
<label>E-mail:</label>
<input type="text" name="email" value="<?php echo $email; ?>">
<span class="star">*</span>
<span class="error"><?php echo $emailErr; ?></span>
</div>

<div class="row">
<label>Website:</label>
<input type="text" name="website" value="<?php echo $website; ?>">
<span class="error"><?php echo $websiteErr; ?></span>
</div>

<div class="row">
<label>Comment:</label>
<textarea name="comment"><?php echo $comment; ?></textarea>
</div>

<div class="row">
<label>Gender:</label>
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Male">Male
<span class="star">*</span>
<span class="error"><?php echo $genderErr; ?></span>
</div>

<br>

<div class="row">
<input type="submit" value="Submit">
</div>

<h3>Your Input:</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];

    $data = $name . " | " . $email . " | " . $website . " | " . $comment . " | " . $gender . "\n";

    file_put_contents("data.txt", $data, FILE_APPEND);
}
?>

</form>

</div>

</body>
</html>