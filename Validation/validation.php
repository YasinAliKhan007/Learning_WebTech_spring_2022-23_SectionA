<!DOCTYPE html>
<html>

<head>
    <style>
        .error {
            color: #FF0001;
        }
    </style>
</head>

<body>

    <?php
    $nameErr = $emailErr = $dateErr = $genderErr = $educationErr = "";
    $name = $email = $date = $gender = $agree = "";
    $education[] = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //String Validation  
        if (empty($_POST["name"])) {
            $nameErr = "Full Name is required";
        } else {
            $name = input_data($_POST["name"]);
            if (!preg_match('/^([a-zA-Z]+[\'-]?[a-zA-Z]+[ ]?)+$/', $name)) {
                $nameErr = "Only alphabets and white space period dash are allowed";
            }
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = input_data($_POST["email"]);
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["birthday"])) {
            $dataErr = "Date is required";
        } else {
            $date = input_data($_POST["birthday"]);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = input_data($_POST["gender"]);
        }
    }
    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Registration Form</h2>
    <span class="error">* Fillup All Require Data </span>
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend><em>Full Name</em></legend>
            <input type="text" name="name">
            <span class="error">* <?php echo $nameErr; ?> </span>
        </fieldset>
        <br><br>
        <fieldset>
            <legend><em>E-mail</em></legend>
            <input type="text" name="email">
            <span class="error">* <?php echo $emailErr; ?> </span>
        </fieldset>
        <br><br>
        <fieldset>
            <legend><em>Gender</em></legend>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <span class="error">* <?php echo $genderErr; ?> </span>
        </fieldset>
        <br><br>
        <fieldset>
            <legend>Date Of Birth</legend>
            <input type="date" name="birthday">
            <span class="error">* <?php echo $dateErr; ?> </span>
        </fieldset>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if ($nameErr == "" && $emailErr == "" && $dateErr == "" && $genderErr == "" && $educationErr == "") {
            echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
            echo "<h2>Your Input:</h2>";
            echo "Name: " . $name;
            echo "<br>";
            echo "Email: " . $email;
            echo "<br>";
            echo "Date of Birth: " . $date;
            echo "<br>";
            echo "Gender: " . $gender;
            echo "<br>";
        } else {
            echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";
        }
    }
    ?>

</body>

</html>