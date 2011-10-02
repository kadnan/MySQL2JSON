<?
/** 
* Filename: example.php 
* Purpose: Example file which is utilising mysql2json class
* Author: Adnan Siddiqi <kadnan@gmail.com> 
* License: PHP License 
* Date: Tuesday,June 21, 2006 
*
*/
include("mysql2json.class.php");
//this is db connection file and has nothing to do withe the class itself
require("dbcon.php");
?>
<?
$num=0;
//any SQL select Query
$sql="select * from students s";
$result=@mysql_query($sql) or die(mysql_error());
$num=mysql_affected_rows();
//calling class
$objJSON=new mysql2json();
print(trim($objJSON->getJSON($result,$num)));
?>

