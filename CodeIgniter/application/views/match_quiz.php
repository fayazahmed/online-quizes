<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Match the Following</title>
<style type="text/css">
ul.answers {
   position: relative;
    display: inline-block;
    vertical-align: top;
    width: 100px;
    list-style: none;
    padding: 0;
    margin: 10;
}
.leftbox{
	position:relative;
	float:left;
	width:134px;
	height:61px;
	text-align:center;
	vertical-align:middle;
	margin-left:50px;
	margin-right:50px;
	padding:10px;
	border:2px solid red;
}

 #left { text-align: center; margin:0 auto; }
 #center { text-align: left; margin: 0 auto; }
 
ul.options {
    position: relative;
    display: inline-block;
    vertical-align: top;
    width: 145px;
    list-style: none;
    border: 2px solid blue;
    text-align: center;
    padding: 0;
    margin: 0;

li {
      border: 1px solid transparent;
      padding: 6px 8px;
}

li.option { 
      display: block;
      position: relative;
      z-index: 50;
      font-size: 13px;
}

ol.questions {
   position: relative;
    display: inline-block;
    vertical-align: top;
    width: 100px;
    list-style: none;
    padding: 0;
    margin: 10;
	
	.target {
	  display: inline-block;
      width: 110px;
      background: lightblue;
      margin: 0 3px;
      text-align:center;
    }
}
#right { text-align: center; margin: 0 auto; }

</style>

<script>

function allowDrop(ev){
	ev.preventDefault();
}

function drag(ev){
	ev.dataTransfer.setData("Text", ev.target.id);
}

function drop(ev){
	var data=ev.dataTransfer.getData("Text");
	ev.target.appendChild(document.getElementById(data));
	ev.preventDefault();
}
</script>

</head>

<body>
<?php include('header.php'); ?>
<br>
<div id="container">
	<h1 align="center">Start the Quiz!</h1>

<table cellspacing="20">	
<h2 align="center" style="color:red;">Please drag and drop answers by checking the question and the answer box numbers!!!</h2>
<tr valign="top">
<td>

<div id="left">
<ul class="options">
	<h2 class="title">Options</h2> 
	<li class="options" name="img1" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/password.png" id="drag1" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img2" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/ddos.png" id="drag2" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img3" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/ids.png" id="drag3" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img4" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/vpn.png" id="drag4" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img5" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/aes.png" id="drag5" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img6" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/process.png" id="drag6" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img7" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/sso.png" id="drag7" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img8" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/ips.png" id="drag8" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img9" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/authenticate.png" id="drag9" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img10" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/virus.png" id="drag10" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img11" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/loss_of_data.png" id="drag11" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img12" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/ssl.png" id="drag12" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img13" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/mac.png" id="drag13" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img14" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/dos.png" id="drag14" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img15" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/cia.png" id="drag15" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img16" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/aaa.png" id="drag16" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img17" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/dac.png" id="drag17" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img18" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/firewall.png" id="drag18" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img19" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/rbac.png" id="drag19" draggable="true" ondragstart="drag(event)"> </li>
	<li class="options" name="img20" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img_quiz/integrity.png" id="drag20" draggable="true" ondragstart="drag(event)"> </li>
</ul>
</div>
</td>

<td>
<div id="center">
	<ol class="questions">
	<h2 class="title">Questions</h2> <br>
	<h3>
	<li>Pillar of Information Assurance </li> <br> <br>
	<li>Risk of not implying with Information Assurance </li><br> <br>
	<li>Method of Authentication </li><br> <br>
	<li>What is "I" in the CIA traid? </li><br> <br>
	<li>Verify User Identity </li><br> <br>
	<li>Controls traffic flow between networks </li><br> <br>
	<li>Malicious Computer Program </li><br> <br>
	<li>Denial of Services </li><br> <br> 
	<li>Distributed Denial of Services </li><br> <br>
	<li> Intrusion Detection System </li><br> <br>
	<li> Intrusion Prevention System </li><br> <br>
	<li> Authentication, Authorization & Accounting </li><br> <br>
	<li> Virtual Private Network </li><br> <br>
	<li> Discretionary Access Control </li><br> <br>
	<li> Mandatory Access Control </li><br> <br>
	<li> Role/Rule based Access Control </li><br> <br>
	<li> Confidentiality, Integrity, Availability </li><br> <br>
	<li> Secure Sockets Layer </li><br> <br>
	<li> Single Sign-on </li><br> <br>
	<li> Advanced Encryption Standard </li><br> <br>
</h3>
</ol>
</div>
</td>
<td>
<div id="center">
	<ol class="answers">
	<h2 class="title">Drop Answers Below</h2><br>

<li class="leftbox" name="ans1" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans2" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans3" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans4" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans5" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans6" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans7" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans8" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans9" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans10" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans11" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans12" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans13" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans14" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans15" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans16" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans17" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans18" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans19" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>
<li class="leftbox" name="ans20" ondrop="drop(event)" ondragover="allowDrop(event)"></li> <br>


</ol>
</div>
</td>


</tr>
</table>
<form method="post" action="<?php echo base_url();?>matchresultdisplay">

<br>
<br>
 <input type="button" value="Back" onClick="history.go(-1);return true">
	<input type="submit" value="Submit">
    <br><br>

</form>
</body>

</html>

<?php include('footer.php'); ?>