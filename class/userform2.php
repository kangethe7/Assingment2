<?php
class userform2 {
    function sign_up2() {

        // Include the database connection file
        include 'pdo.php'; // Ensure 'pdo.php' establishes a PDO connection in $conn variable

        print_r($_POST);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmpass = $_POST['confirmpass'];

            // Validate form data (e.g., check if passwords match)
            if ($password !== $confirmpass) {
                echo "Passwords do not match.";
            } else {
                // Hash the password for security
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                try {
                    // Insert data into the database using PDO
                    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
                    $stmt = $conn->prepare($sql);

                    // Bind parameters using PDO
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $hashedPassword);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "New record created successfully!";
                    } else {
                        echo "Error: Could not execute query.";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

                // No need to close the PDO connection explicitly, as it closes automatically when the script ends.
            }
        }
    }
}

$userForm2 = new userform2();
$userForm2->sign_up2();
?>
