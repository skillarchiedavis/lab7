<?php
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'world';
$countrynm = $_GET['country'];// was added
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$country =(htmlentities($_GET["country"]));
    if (htmlentities($_GET["all"]) === "true"){
        $stmt = $conn->query("SELECT * FROM countries ");
    } else {
    $stmt = $conn->query("SELECT * FROM countries WHERE name='$country'");
    }
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<ul>';
foreach ($results as $row) {
  echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
}
echo '</ul>';