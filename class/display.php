<?php

class display{

  function display_users(){

?>

<!DOCTYPE html>

<link rel="stylesheet" href="../css/style.css">


<?php

    include 'pdo.php';

    try { // Try block starts here
      $sql = "SELECT * FROM users"; 
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      // Set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $users = $stmt->fetchAll();

      // Display user records in an HTML table
      echo "<h2>Registered Users</h2>";
      echo "<table class='table'>";
      echo "<thead><tr><th>ID</th><th>Username</th><th>Email</th></tr></thead>";
      echo "<tbody>";
      foreach($users as $user) {
        echo "<tr>";
        echo "<td>" . $user["ID"] . "</td>";
        echo "<td>" . $user["username"] . "</td>";
        echo "<td>" . $user["email"] . "</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
    } catch(PDOException $e) { // Catch block within the function
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
  } 
} 
?>