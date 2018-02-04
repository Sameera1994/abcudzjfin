<?php
include('../connection.php');
if(isset($_POST['name']))
{
$name=trim($_POST['name']);
$query2=mysqli_query($conn,"SELECT * FROM user_verify WHERE Name LIKE '%$name%' OR UPF LIKE '%$name%'");
echo "<ul id='sug'>";
while($query3=mysqli_fetch_array($query2))
{
?>

<li onclick='fill("<?php echo $query3['Name']; ?>")'><?php echo $query3['Name']; ?></li>
<?php
}
}
?>
</ul>