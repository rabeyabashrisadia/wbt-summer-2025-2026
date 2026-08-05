<?php
// Error message variables
$nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodGroupErr = "";
// Input variables
$name = $email = $dob = $gender = $degree = $bloodGroup = "";

// Form submit হওয়া চেক করা
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Name Validation
    if (empty($_POST["name"])) {
        $nameErr = "Name cannot be empty";
    } else {
        $name = cleanInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z.- ]*$/", $name)) {
            $nameErr = "Must contain letters, period, dash or spaces only";
        } elseif (str_word_count($name) < 2) {
            $nameErr = "Name must contain at least two words";
        }
    }

    // 2. Email Validation
    if (empty($_POST["email"])) {
        $emailErr = "Email cannot be empty";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Must be a valid email address (e.g. anything@example.com)";
        }
    }

    // 3. Date of Birth Validation
    if (empty($_POST["dob"])) {
        $dobErr = "Enter your date of birth";
    } else {
        $dob = cleanInput($_POST["dob"]);
    }

    // 4. Gender Validation
    if (empty($_POST["gender"])) {
        $genderErr = "At least one gender must be selected";
    } else {
        $gender = cleanInput($_POST["gender"]);
    }

    // 5. Degree Validation
    if (empty($_POST["degree"])) {
        $degreeErr = "At least one degree must be selected";
    } else {
        $degree = $_POST["degree"]; // array check
        if (count($degree) < 1) {
            $degreeErr = "At least one degree must be selected";
        }
    }

    // 6. Blood Group Validation
    if (empty($_POST["bloodGroup"])) {
        $bloodGroupErr = "Must be selected";
    } else {
        $bloodGroup = cleanInput($_POST["bloodGroup"]);
    }
}

// Security Input Sanitization Function
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation Task</title>
    <style>
        .error { color: red; }
        .form-table { border-collapse: collapse; }
        .form-table td { padding: 8px; }
    </style>
</head>
<body>

<h2>Form Validation</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table class="form-table" border="1">
        <!-- Name -->
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name" value="<?php echo $name; ?>">
                <span class="error">* <?php echo $nameErr; ?></span>
            </td>
        </tr>

        <!-- Email -->
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <span class="error">* <?php echo $emailErr; ?></span>
            </td>
        </tr>

        <!-- Date of Birth -->
        <tr>
            <td>Date of Birth</td>
            <td>
                <input type="text" name="dob" value="<?php echo $dob; ?>">
                <span class="error">* <?php echo $dobErr; ?></span>
            </td>
        </tr>

        <!-- Gender -->
        <tr>
            <td>Gender</td>
            <td>
                <input type="text" name="gender" value="<?php echo $gender; ?>" placeholder="Male / Female / Other">
                <span class="error">* <?php echo $genderErr; ?></span>
            </td>
        </tr>

        <!-- Degree -->
        <tr>
            <td>Degree</td>
            <td>
                <input type="text" name="degree[]" placeholder="e.g. SSC, HSC, BSc">
                <span class="error">* <?php echo $degreeErr; ?></span>
            </td>
        </tr>

        <!-- Blood Group -->
        <tr>
            <td>Blood Group</td>
            <td>
                <input type="text" name="bloodGroup" value="<?php echo $bloodGroup; ?>" placeholder="e.g. A+, B+, O+">
                <span class="error">* <?php echo $bloodGroupErr; ?></span>
            </td>
        </tr>

        <!-- Submit Button -->
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>

<?php
// Validation সফল হলে ডাটা প্রিন্ট করবে
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$dobErr && !$genderErr && !$degreeErr && !$bloodGroupErr) {
    echo "<h3>Submitted Information:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "DOB: $dob <br>";
    echo "Gender: $gender <br>";
    echo "Degree: " . implode(", ", (array)$degree) . "<br>";
    echo "Blood Group: $bloodGroup <br>";
}
?>

</body>
</html>