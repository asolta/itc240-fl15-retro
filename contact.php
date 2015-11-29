
                <!-- header ends here-->
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<p> <?=$content?></p>
<?php
// emailtest1.php
$to = 'asolta01@seattlecentral.edu';
$subject ='Test Email';
$message='Test Message';

$response = mail($to,$subject,$message);
if ($response === true)
{// email hopefully sent
    echo 'email hopefully sent';
}else{
    echo 'trouble';   
if(isset($_POST['Submit']))
{//if data, process it!
        echo '<pre>';
        var_dump($_POST);
        echo'</pre>';
}else{//no data, show form
        echo '
        <form method="post" action="">
        Name: <input type="text" name="Name" required="required"/><br />
        Email: <input type="email" name="Email" required="required"/><br />
        Comments: <textarea name="Comments"></textarea><br />
        <input type="submit" value="Send" name="Submit"/>
        </form>
            
        ';
    
    }
?>

<h2> Sub Heading</h2>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<script src="include/util.js" type="text/javascript"></script><!-- utility file of handy JS functions -->
	<link rel="stylesheet" type="text/css" href="include/styles.css" /><!-- optional stylesheet reference -->
	<style type="text/css">
		/* required class for identifying mandatory elements */
		.required {font-style:italic;color:#FF0000;font-weight:bold;}
	</style>
	<script type="text/javascript">
		//place local js code here
		
		function init()
		{//init places focus on the first form element
			document.myForm.Name.focus();
		}
		
		//here we make sure the user has entered valid data	
		function checkForm(thisForm)
		{//check form data for valid info
			if(empty(thisForm.Name,"Please Enter Your Name")){return false;}
			if(!isEmail(thisForm.Email,"Please enter a valid Email Address")){return false;}
			return true;//if all is passed, submit!
		}
		
		addOnload(init); //with addOnload() we can add as many functions as we wish to window.onload (one by one)!
	</script>
</head>

<body>
<h3 align="center">js_template3.htm</h3>
<p align="center">A page with which to begin form validation projects.</p>
<form action="http://www.newmanic.com/formtest.asp" method="post" name="myForm" onsubmit="return checkForm(this);">
<div align="center"><span class="required">(*required)</span></div>
	<table border="1" style="border-collapse:collapse" align="center">
		<tr><!-- the form elements 'Name' and 'Email' are sigificant to the app, any others can be added/deleted -->
			<td align="right"><span class="required">*</span>Name:</td>
			<td><input type="text" name="Name" /></td>
		</tr>
		<tr><td align="right"><span class="required">*</span>Email:</td>
			<td><input type="text" name="Email" /></td>
		</tr>
		<tr><td align="right">How Did You Hear About Us?</td>
			<td>
				<select name="How_Did_You_Hear_About_Us?">
					<option value="">Choose How You Heard</option>
					<option value="Phone">Phone</option>
					<option value="Web">Web</option>
					<option value="Magazine">Magazine</option>
					<option value="Smoke Signal">Smoke Signal</option>
					<option value="Other">Other</option>
				</select>
			</td>
		</tr>
		<tr><td align="right">What Services Are You Interested In?:</td>
			<td>
				<input type="checkbox" name="Interested_In[]" value="New Website" /> New Website <br />
				<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
				<input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
				<input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
				<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
			</td>
		</tr>
		<tr>
			<td align="right">Would You Like To Join Our Mailing List?</td>
			<td>
				<input type="radio" name="Join_Mailing_List?" value="Yes" /> Yes <br />
				<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
			</td>
		</tr>
		<tr><td align="right">Comments:</td>
			<td><textarea name="Comments" cols="40" rows="4" wrap="virtual"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" /></td>
		</tr>
    </table>
    </form>
</body>
<iframe width="560" height="315" src="<?=$video?>" frameborder="0" allowfullscreen></iframe>

<?php include 'includes/footer.php'; ?>
<!--footer starts here-->