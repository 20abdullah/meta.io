<?php
    include 'header.php';
?>

<h1>search page</h1>
<div class="artical-cotaner"></div>

<?php
If (isset($_POST['submit-search'])) {

$search = mysqli_real_escape_string($conn, $_POST['search']);

$sql= "SELECT * FROM materila WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_date LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

$queryResu1t = mysqli_num_rows($result);

echo "There are ".$queryResu1t." results";
if ($queryResu1t > 0) {
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>
    <h3>".$row['a_title']."</h3>
    <p>".$row['a_title']."</p >      
    <p>".$row['a_date']."</p >      
    <p>".$row['a_author']."</p >      
    
    </div>";
}
} else {
    echo "no result";
}

}

?>