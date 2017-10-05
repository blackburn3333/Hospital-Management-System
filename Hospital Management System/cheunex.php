<?php include 'connectt.php';

$usernm=$dbhandle->real_escape_string($_POST["unex"]);

$checkun  ="SELECT * FROM sup_admin WHERE sadiun = '".$usernm."'";
$checkeun ="SELECT * FROM lvl2_admin WHERE lvtwusern = '".$usernm."'";

$results=$dbhandle->query($checkun);
$numrows=$results->num_rows;

$resultss=$dbhandle->query($checkeun);
$numrowss=$resultss->num_rows;

if($numrows > 0 || $numrowss > 0){
	echo '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Username you entered is already in use!</div>';
}else{
	echo '<br/ ><div align="center" class="alert alert-success">User Name Avilable</div>';
}

?>
