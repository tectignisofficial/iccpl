<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript form validation - checking non empty</title>
<style>
function stringlength(inputtxt, minlength, maxlength)
{ 
var field = inputtxt.value; 
var mnlen = minlength;
var mxlen = maxlength;

if(field.length<mnlen || field.length> mxlen)
{ 
alert("Please input the userid between " +mnlen+ " and " +mxlen+ " characters");
return false;
}
else
{ 
alert('Your userid have accepted.');
return true;
}
}
    </style>
</head>
<body onload='document.form1.text1.focus()'>
<div class="mail">
<p>Enter Userid [less then or equal to 9] and Submit</p>
<form name="form1" action="#">
<ul>
<li>Username:<input type='number' name='text1'/></li>
<li>&nbsp;</li>
<li class="submit"it"><input type="submit" name="submit" value="Submit" onclick="stringlength(document.form1.text1,1,9)"/></li>
<li>&nbsp;</li>
</form>
</ul>
</div>
<script>function stringlength(inputtxt, minlength, maxlength)
{ 
var field = inputtxt.value; 
var mnlen = minlength;
var mxlen = maxlength;

if(field.length<mnlen || field.length> mxlen)
{ 
alert("Please input the userid between " +mnlen+ " and " +mxlen+ " characters");
return false;
}
else
{ 
alert('Your userid have accepted.');
return true;
}
}</script>
</body>
</html>