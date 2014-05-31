<html>
<body>
<?php
$mydate=getdate(date("U"));
echo "$mydate[weekday],$mydate[month]  $mydate[mday],$mydate[year]";
echo "$mydate[mday]"."$mydate[month]"; 
?>


</body>
</html>