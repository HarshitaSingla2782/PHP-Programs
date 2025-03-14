<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <h2>Age Calculator</h2>
    <form method="post">
        <label for="dob">Enter Your Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <br><br>
        <input type="submit" name="submit" value="Calculate Age">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $dob = $_POST['dob'];
        $birthDate = new DateTime($dob);
        $currentDate = new DateTime();

        if($birthDate > $currentDate) {
            echo "<p>Please enter a valid birth date.</p>";
        } else {
            $age = $birthDate->diff($currentDate);
            echo "<p>Your Age: " . $age->y . " years, " . $age->m . " months, and " . $age->d . " days.</p>";
        }
    }
    echo "<br><br>";
    echo "This program is done by Harshita Singla 0211BCA126";
    ?>
</body>
</html>