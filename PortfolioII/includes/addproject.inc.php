<?php
	include_once('connect.inc.php');
	
	//Add project
	if (isset($_POST['add'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
		
		echo $user_id;
	
		// Get everything that is being posted.
		$title = $_POST['title'];		
		$status = $_POST['status'];
		$subject = $_POST['subject'];
		$order = $_POST['order'];
		$content = $_POST['content'];
		$image = $_POST['coverimage'];
		
		$sql = "INSERT INTO projects (pro_title, pro_content, pro_subject, pro_status, pro_order, pro_img) VALUES ('$title', '$content', '$subject', '$status', '$order', '$image')";

		if ($conn->query($sql) === TRUE) {
			//header('Location: ../addproject.php?add=yes&userid=$user_id');
		}
	}
	
	//Edit project
	if (isset($_POST['edit'])) {
		//Get the projectid from url
		$p = $_GET['p'];
	
		// Get everything that is being posted.
		$title = $_POST['title'];		
		$status = $_POST['status'];
		$subject = $_POST['subject'];
		$order = $_POST['order'];
		$content = $_POST['content'];
		
		$sql = "UPDATE projects SET pro_title='$title', pro_content='$content', pro_subject='$subject', pro_status='$status', pro_order='$order' WHERE pro_id='$p'";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../editproject.php?p=$p&add=yes");
		}
	}
	
	//Delete project
	if (isset($_POST['delete'])) {
		// Get everything that is being posted.
		$id = $_POST['deleteid'];
		
		$sql = "DELETE FROM projects WHERE pro_id=$id";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../projectlist.php?q=delete&delete=yes");
		}
	}
	
	//Delete image
	if (isset($_POST['imgdelete'])) {
		$p_id = $_POST['pid'];
		$img_id = $_POST['imgid'];
		
		$sql = "DELETE FROM images WHERE img_id=$img_id";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../imgdelete.php?p=$p_id&delete=yes");
		}
	}
	
	//Edit image
	if (isset($_POST['imgedit'])) {
		$p_id = $_POST['pid'];
		$image = $_POST['coverimage'];
		
		$sql = "UPDATE projects SET pro_img='$image' WHERE pro_id=$p_id";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../imgedit.php?p=$p_id&update=yes");
		}
	}
	
?>