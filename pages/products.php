</> PHP

<?php
include '../includes/header.php';
 include '../includes/db.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

echo "<h1>Products</h1>";

while($row = mysqli_fetch_assoc($result)) {

  echo "<h3>" . $row['name'] . "</h3>";
  echo "<p>$" . $row['price'] . "</p>";

  echo "<form method='post'>";
  echo "<input type='submit' value= 'Add to Cart'>";
  echo "</form>";
}

include '../includes/footer.php';
?> 
