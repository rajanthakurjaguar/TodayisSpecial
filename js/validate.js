function validateForm()
{
var userid=document.forms["myForm"]["userid"].value;
var pass1=document.forms["myForm"]["pass1"].value;
var pass2=document.forms["myForm"]["pass2"].value;
//var agegp=document.getElementById("agegp1").checked;
var user=document.forms["myForm"]["user"].value;
var pass=document.forms["myForm"]["pass"].value;
var agegp=document.forms["myForm"].agegp;
var usertype=document.forms["myForm"].usertype;
var i;

if(usertype[0].checked)//for new user
{
	flag=0;
	for (i=0;i<agegp.length;i++)
	{
		if (agegp[i].checked)
		{
			//txt = txt + coffee[i].value + " ";
			flag=1;
		}
	}
	if (userid==null || userid=="" || pass1==null || pass1=="" || pass2==null || pass2=="" )
	{
		alert("User-id or password fields cannot be left empty..!");
		return false;
	}
	else if(pass1!=pass2)
	{
		document.getElementById("demo1").innerHTML="Passwords do not match";
		return false;
	}
	else if (flag==0)
	{
		document.getElementById("demo1").innerHTML="You should select one of the age groups";
	return false;
	}
	else{}
}
else if (usertype[1].checked)//for existing user
{
	if (user==null || user=="" || pass==null || pass=="")
	{
		alert("User-id or password fields cannot be left empty..!");
		return false;
	}
}
}