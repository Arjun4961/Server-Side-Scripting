<html>
<body>
<?php
echo(“result with date():<br/>”);
echo(Date(“i”).“<br/>”);
echo(date(“I ds \of F Y h:i:s A”).“<br/>”);
echo(“result with time():<br/>”);
$t=time();
echo($t.“<br />”);
echo(date(“D F d Y”,$t));
?>
</body>
</html>
