<?php
include('includes/dbconnection.php');
$eid=intval($_GET['nid']);
$sql = $dbh->query("SELECT NoticeTitle FROM tblpublicnotice WHERE ID=$eid");
$fetchsql = $sql->fetch();
$sub = $fetchsql['NoticeTitle'];
echo "<pre>";
echo $sub;
echo "<pre>";

//fetching notice
$eid=intval($_GET['nid']);
$sql1 = $dbh->query("SELECT NoticeMessage FROM tblpublicnotice WHERE ID=$eid");
$fetchsql1 = $sql1->fetch();
$msg = $fetchsql1['NoticeMessage'];

echo "<pre>";
echo $msg;
echo "<pre>";

?>