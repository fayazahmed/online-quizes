<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Fill in the Blanks</title>

</head>
<body>
<?php
include('header.php');
?>
<div id="container">
	<h1>Start the Quiz!</h1>
	<h2 style="color:red;">Please enter all answers in UPPERCASE only.</h2>
    
    <form method="post" action="<?php echo base_url();?>blanksresultdisplay">
       
    
    <?php foreach($questions as $row) { ?>
    
    <?php $ans_array = array($row->answer);?>
	
    
    <h4><?=$row->blanksid?>.<?=$row->question?></h4>
    
	<input type="text" name="quizid<?=$row->blanksid?>" value="" required><br>
	
    <?php } ?>
    
    <br><br>
	<input type="button" value="Back" onClick="history.go(-1);return true">
    <input type="submit" value="Submit!">
	<br><br>
    </form>
    
</div>

</body>
</html>

<?php
include('footer.php');
?>