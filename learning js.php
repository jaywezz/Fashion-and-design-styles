<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="button.css">
	<title>Learning js</title>
	<script type="text/javascript">
		function myfunction() {
			//document.getElementById("demo").innerHTML="<p style='font-size: '40px'>Enter your Email</p><input type='email'>";
			//document.getElementById("demo").innerHTML = "<div >JJFVDDSCDNCD</div>";

		}
		function validateform(){
			var x=document.forms["myform"]["fname"].value;
			if (x ==" ") 
			{
				alert("Name must be entered");
				return false;
			}
		}
	</script>
</head>
<body>
	<div>SOME TITLE HERE</div>
	<form name="myform" onsubmit="validateform()" method="post">
		<input type="name" name="fname">
		<input type="submit" name="button" value="submit">
	</form>
   <button class="button button2" type="button" onclick="myfunction()">Login</button>
</body>
</html>