<?php
	$txt = '';
	if(isset($_POST["submit"]))
	{
		$i=0;
		$n[$i] = $_POST['name'];
		$i++;
		$n[$i] = $_POST['email'];
		$i++;
		$n[$i] = $_POST['msg'];
		$i++;
		$myfile = fopen("testfile.txt", "a");
		//;
		
		$txt = "Name:" . $_POST['name'] . " Email:" . $_POST['email'] . " msg:" . $_POST['msg'] ."\n";
		fwrite($myfile, $txt);
		fclose($myfile);	
		echo "<script>alert('Your comment got submiited successfully. Thanks for your time!' );window.location.href='../index.html';</script>";
	}
	else
	{
		echo "<script>alert('Cannot submiit Your comment. Please try again.' );window.location.href='../contact.html';</script>";
	}
	
?>