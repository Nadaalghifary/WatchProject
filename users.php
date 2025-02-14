<?php
include_once 'session.php';

$IsUnLogin=(!isset($_SESSION['Id']) || ($_SESSION['Id'] == ''));
$prod_id=(int)0;
$UsrId =(int)0;
$IsAdd=(int)0;
$price=(float)0;
$qty=(int)0;
$msg="";
if (!$IsUnLogin) {
  $UsrId = (int) $_SESSION['Id'];
}
if (isset($_POST['prod_id'])) {
	$prod_id = (int)$_POST['prod_id'];
	$IsAdd = (int)$_POST['IsAdd'];
	$price = (float)$_POST['price'];
	$qty = (int)$_POST['qty'];
}
if($prod_id>0)
{
if(	$IsAdd==0)
{
$query = "delete from mycards where prod_id=$prod_id and UsrId=$UsrId";
$result = $db->deletedb($query);
}
else
{
$query = "select * from mycards where prod_id=$prod_id and UsrId=$UsrId";
$num_row = $db->getRows($query);
$result=false;
if ($num_row <= 0) {
$query = "insert into mycards(prod_id,price,qty,UsrId,state) values($prod_id,$price,$qty,$UsrId,0)";
$result = $db->insert($query);
}
}
if ($result) {
  echo "success";
}
else
{
	if(	$IsAdd==1)
		 echo "This product is already added to the cart";
}
}
?>