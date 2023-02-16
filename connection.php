<?php
$con=mysql_connect("localhost", "root"," ");
If(!$con)
{
Die("could not connect:". Mysql_error());
echo "data base not connected";
}
else
{
echo "mysql database is connected<br>";
}
mysql_close($con);
If ($con)
{
echo "database connection closed";
}?>
