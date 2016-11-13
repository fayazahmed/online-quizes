<?php
include('header.php');
include('sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>

    </head>
    <body>
<div id="content_area">
<h2>CSC 825 - Data Security & Information Assurance Online Lab</h2>
<p>
    In this online lab, you will be learning about Data Security and Information Assurance 
	through various interactive methods. These online labs will help the students gain 
	in depth information about data security and information assurance which they are 
	restricted from due to their online status.
	
</p>
<img src="/images/data-security.jpg" class="imgLeft"/>
<h2>What is Data Security?</h2>
<p>
    Data security refers to protective digital privacy measures that are applied to prevent 
	unauthorized access to computers, databases and websites. Data security also protects 
	data from corruption. Data security is the main priority for organizations of every size 
	and genre.

</p>

<img src="/images/Information_Assurance.png" class="imgRight" />
<br>
</br>
<h2>What is Information Assurance?</h2>
<p>
    Information assurance (IA) is the practice of assuring information and managing risks related 
	to the use, processing, storage, and transmission of information or data and the systems and 
	processes used for those purposes. Information assurance includes protection of the integrity, 
	availability, authenticity, non-repudiation and confidentiality of user data. It uses physical, 
	technical and administrative controls to accomplish these tasks. While focused predominantly 
	on information in digital form, the full range of IA encompasses not only digital but also 
	analog or physical form. These protections apply to data in transit, both physical and electronic 
	forms as well as data at rest in various types of physical and electronic storage facilities. 
	Information assurance as a field has grown from the practice of information security.
</p>
<br>
<div id="container">
	<h2>Start an Assignment</h2>

<br>
<h3><a href="<?php echo base_url();?>multipledisplay">Multiple Choice</a></h3> 
<br>
<h3><a href="<?php echo base_url();?>blanksdisplay">Fill in the Blanks</a></h3>
<br>
<h3><a href="<?php echo base_url();?>matchdisplay">Match the Following</a></h3>
<br>

</div>
</div>          

</body>
</html>

<?php
include('footer.php');
?>