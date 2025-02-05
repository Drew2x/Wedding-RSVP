<?php
  include("session.php");
  
  if(isset($_POST['search']))
  {
    $valueToSearh = $_POST['valueToSearh']; 
    $query = "SELECT * FROM attenders WHERE name LIKE '%".$valueToSearh."%' OR email LIKE '%".$valueToSearh."%'";
    $result = filterRecord($query);
  }
  else
  {
    $query = "SELECT *FROM attenders";
    $result = filterRecord($query);
  }
  
  function filterRecord($query)
  {
    include("config.php");
    $filter_result = mysqli_query($mysqli, $query);
    return $filter_result;
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystyle1.css" /> 
</head>
<body>

<div class="icon-bar">
  <a class="active" href="attend.php"><i class="fa fa-home"></i></a> 
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Attenders</h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Search">
<button type="submit" class="signupbtn" name="search" >Search</button>
</form>
<br />

<?php
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";


echo "<td><a href='delete.php?id=".$row['name']."'><img src='./img/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 