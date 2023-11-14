<?php
session_start();
include('../pages/config/config.php');
$sql = "select * from tbl_phanhoikhachhang where gia_tri=1";
$ketqua = $conn->prepare($sql);
$ketqua->execute();
$ketqua = $ketqua->fetchAll();
?>