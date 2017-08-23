<?php session_start(); ?>
<?php
	//unset session
	unset($_SESSION['myname']);
?>

<?php echo $_SESSION['myname']; ?>
