<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$con = mysqli_connect("localhost","root","", "csc825onlinelabs");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
$count_query = mysql_query("SELECT NULL FROM multiple_choice");
$count = mysql_num_rows($count_query);

//pagination starts
if(isset($_GET['page'])){
	$page = preg_replace("#[^0-9]#","",$_GET['page']);
} else{
	$page = 1;
}
$perPage = 1;

$lastPage = ceil($count/$perPage);

if($page < 1){
	$page = 1;
} else if($page > $lastPage){
	$page = $lastPage;
}

$limit = "LIMIT " .($page - 1)*$perPage .", $perPage";

$query = mysql_query("SELECT * FROM multiple_choice $limit");

$pagInation = NULL;

if($lastPage != 1){
	
	if($page != 1){
		$prev = $page - 1;
		$pagInation .= '<a href="'.base_url().'multipledisplay'.'?page='.$prev.'">Previous</a> &nbsp; &nbsp; ';
	}

	if($page != $lastPage){
		$next = $page + 1;
		$pagInation .= ' &nbsp; &nbsp; <a href="'.base_url().'multipledisplay'.'?page='.$next.'">Next</a> &nbsp; &nbsp; ';
		
	} 
}
?>
<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Multiple Choice</title>

</head>
<body>
<div id="container">
	<h1 align="center">Questions</h1>
	
    <form method="post" action="<?php echo base_url();?>Multiple/multipleresultdisplay">

<table align="center" style="border:solid blue;" cellpadding="35" bgcolor="#AEFFF9">
<tr>

<td>

<?php
while($row = mysql_fetch_array($query)){
	$output = NULL;
	echo $output .= $row['multiplechoiceid']. ". ". $row["question"];
	
	echo "<br>";
	echo "<br>";

	$ans = array($row['choice1'], $row['choice2'], $row['choice3'], $row['answer']);
	shuffle($ans);
	
	foreach ($ans as $option) {
		
    echo "<input type='radio' name='quizid' required>".$option."</input><br>";
	} unset($option);

	echo "<br/>";
	echo "<br/>";

}
?>
<?php echo $pagInation; ?>
</td>
</tr>

</table>
 <br>


 <br><br>
    <input type="submit" align="right" value="Submit!">
    </form>
 <br><br>
</div>
</body>
</html>
<?php 
include("footer.php");
?>