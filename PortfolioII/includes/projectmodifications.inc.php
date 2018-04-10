<?php
	include_once('connect.inc.php');
	
	//Add project
	if (isset($_POST['add'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
		
		// Get everything that is being posted.
		$title = $_POST['title'];		
		$status = $_POST['status'];
		$subject = $_POST['subject'];
		$order = $_POST['order'];
		$content = $_POST['content'];
		$image = $_POST['coverimage'];
		$grid = $_POST['grid'];
		$method = $_POST['method'];
		$werkplaats = $_POST['contentwerkplaats'];
		$bieb = $_POST['contentbieb'];
		$veld = $_POST['contentveld'];
		$lab = $_POST['contentlab'];
		$showroom = $_POST['contentshowroom'];
		
		//Convert the array so you can insert it in a the db.
		$methods = implode(",", $method);
		
		$sql = "INSERT INTO projects (pro_title, pro_content, pro_subject, pro_status, pro_order, pro_img, pro_grid, pro_method, pro_werkplaats, pro_bieb, pro_veld, pro_lab, pro_showroom) VALUES ('$title', '$content', '$subject', '$status', '$order', '$image', '$grid', '$methods', '$werkplaats', '$bieb', '$veld', '$lab', '$showroom')";

		if ($conn->query($sql) === TRUE) {
		header("Location: ../addproject.php?add=yes&userid=$user_id");
		}
	}
	
	//Edit project
	if (isset($_POST['edit'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
	
		//Get the projectid from url
		$p = $_GET['p'];
	
		// Get everything that is being posted.
		$title = $_POST['title'];		
		$status = $_POST['status'];
		$subject = $_POST['subject'];
		$order = $_POST['order'];
		$content = $_POST['content'];
		$grid = $_POST['grid'];
		$werkplaats = $_POST['contentwerkplaats'];
		$bieb = $_POST['contentbieb'];
		$veld = $_POST['contentveld'];
		$lab = $_POST['contentlab'];
		$showroom = $_POST['contentshowroom'];
		
		$sql = "UPDATE projects SET pro_title='$title', pro_content='$content', pro_subject='$subject', pro_status='$status', pro_order='$order', pro_grid='$grid', pro_werkplaats='$werkplaats', pro_bieb='$bieb', pro_veld='$veld', pro_lab='$lab', pro_showroom='$showroom' WHERE pro_id='$p'";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../editproject.php?p=$p&add=yes&userid=$user_id");
		}
	}
	
	//Delete project
	if (isset($_POST['delete'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
	
		// Get everything that is being posted.
		$id = $_POST['deleteid'];
		
		$sql = "DELETE FROM projects WHERE pro_id=$id";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../projectlist.php?q=delete&delete=yes&userid=$user_id");
		}
	}
	
	//Delete image
	if (isset($_POST['imgdelete'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
	
		$p_id = $_POST['pid'];
		$img_id = $_POST['imgid'];
		
		$sql = "DELETE FROM images WHERE img_id=$img_id";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../imgdelete.php?p=$p_id&delete=yes&userid=$user_id");
		}
	}
	
	//Edit image
	if (isset($_POST['imgedit'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
	
		$p_id = $_POST['pid'];
		$image = $_POST['coverimage'];
		
		$sql = "UPDATE projects SET pro_img='$image' WHERE pro_id=$p_id";
		
		echo $user_id;
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../imgedit.php?p=$p_id&update=yes&userid=$user_id");
		}
	}
	
	//Add subject
	if (isset($_POST['subjectadd'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
	
		$sub_title = $_POST['subjecttitle'];
		$sub_semester = $_POST['semester'];
		$sub_ballspeed = $_POST['ballspeed'];
		
		$sql = "INSERT INTO subjects (sub_name, sub_semester, sub_ball) VALUES ('$sub_title', '$sub_semester', '$sub_ballspeed')";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../projectlist.php?q=subjectadd&add=yes&userid=$user_id");
			
		}
	}
	
	//Update subject
	if (isset($_POST['subjectedit'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
	
		$sub_title = $_POST['subjecttitle'];
		$sub_semester = $_POST['semester'];
		$sub_id = $_POST['id'];
		$sub_ballspeed = $_POST['ballspeed'];
		
		$sql = "UPDATE subjects SET sub_name='$sub_title', sub_semester='$sub_semester', sub_ball='$sub_ballspeed' WHERE sub_id='$sub_id'";
		
		if ($conn->query($sql) === TRUE) {
			header("Location: ../projectlist.php?s=$sub_id&q=subedit&add=yes&userid=$user_id");
		}
	}
	
	//Delete subject
	if (isset($_POST['subjectdelete'])) {
		//Get the things from the url
		$user_id = $_GET['userid'];
	
		$sub_id = $_POST['sub_id'];
		
		$sql = "DELETE FROM subjects WHERE sub_id=$sub_id";

		if ($conn->query($sql) === TRUE) {
			header("Location: ../projectlist.php?q=subjectdelete&delete=yes&userid=$user_id");
		}
	}
	
?>