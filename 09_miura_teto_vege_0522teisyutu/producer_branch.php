<?php
if(isset($_POST['disp'])==true)
{
	if(isset($_POST['producercode'])==false)
	{
		header('Location:producer_ng.php');
		exit();
	}
	$producer_code=$_POST['producercode'];
	header('Location:producer_disp.php?producercode='.$producer_code);
	exit();
}

if(isset($_POST['add'])==true)
{
    header('Location:producer_add.php');
		exit();
}
if(isset($_POST['edit'])==true)
{
	if(isset($_POST['producercode'])==false)
	{
		header('Location:producer_ng.php');
		exit();
	}
	$producer_code=$_POST['producercode'];
	header('Location:producer_edit.php?producercode='.$producer_code);
	exit();
}

if(isset($_POST['delete'])==true)
{
	if(isset($_POST['producercode'])==false)
	{
		header('Location:producer_ng.php');
		exit();
	}
	$producer_code=$_POST['producercode'];
	header('Location:producer_delete.php?producercode='.$producer_code);
	exit();
}

?>