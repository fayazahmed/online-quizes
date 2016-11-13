<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Match the Following</title>

</head>
<body>
<?php
include('header.php');
?>
<div id="container">
	<h1>Result</h1>
    
    <?php $score =0; ?>
    
      <?php $array1= array(); ?>
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>
      <?php $array5= array(); ?>
	  
	        
         <?php foreach($checks as $checkans) { ?>
               <?php array_push($array1, $checkans); } ?>
               
               
        <?php foreach($results as $res) { ?>
               <?php array_push($array2, $res->answer); 
			         array_push($array3, $res->matchid); 
			         array_push($array4, $res->question); 
					 array_push($array5, $res->description);
			   } ?>
               
               
           <?php 
		       for ($x=0; $x<20; $x++) { ?>
 
    <p><?=$array3[$x]?>.<?=$array4[$x]?></p>
    

      <?php if ($array2[$x]!=$array1[$x]) { ?>
      
           <p><span style="background-color: #FF9C9E"><?=$array1[$x]?></span></p>
           <p><span style="background-color: #ADFFB4"><?=$array2[$x]?> - "<?=$array5[$x]?>"</span></p>
		   
           
      <?php } else { ?>
      
           <p><span style="background-color: #ADFFB4"><?=$array1[$x]?> - "<?=$array5[$x]?>"</span></p>

           
           <?php $score = $score + 1; ?>
      
    <?php } } ?>
    
    <br><br>
    
    <h2>Your Score: </h2>
      <h1><?=$score?>/20</h1>
<form method="post" action="<?php echo base_url();?>index.php">  
    <input type="submit" value="Done">
</form>
    <br><br>
</div>

</body>
</html>
<?php
include('footer.php');
?>