</> PHP
session_start();

<?php
include '../includes/header.php';
 include '../includes/db.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {

  echo "<h3>" . $row['name'] . "</h3>";
  echo "<p>$" . $row['price'] . "</p>";
}

include '../includes/footer.php';
?> 
echo "<button>Add to Cart</button>;
