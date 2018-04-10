<?php
	include_once ('dbh.inc.php');
	$subject = $_GET['subject'];
	$userid = $_GET['user'];
	
	$id = '1';
	
	//Get max. question id for what needs to be updated.
	switch ($subject) {
		case 'experimentnl':
			$equestions = 'edsquestions';
			$eid = 'edsq_id';
			break;
				
		case 'resultnl':
			$equestions = 'ersquestions';
			$eid = 'ersq_id';
			break;
				
		case 'experimenten':
			$equestions = 'edsquestionsen';
			$eid = 'edsq_id';
			break;
				
		case 'resulten':
			$equestions = 'ersquestionsen';
			$eid = 'ersq_id';
			break;
			
		$sql = "SELECT * FROM $equestions ORDER BY $eid DESC LIMIT 1";
	}
	$result = $conn->query($sql);
			
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if ($subject == 'experimentnl' || $subject == 'experimenten') {
					$maxq = $row["edsq_id"];
				}
				
				if ($subject == 'resultnl' || $subject == 'resulten') {
					$maxq = $row["ersq_id"];
				}
			}
		}
		
	//Check if submit button is pressed,
	if (isset($_POST['submit'])) {
		//Loop everthing that is posted for questions
		foreach ($_POST['question'] as $insert) {
			//Update the questions that are requested.
			switch ($subject) {
				case 'experimentnl':
					$equestions = 'edsquestions';
					$equestionsc = 'edsq_questions';
					$eid = 'edsq_id';
					break;
						
				case 'resultnl':
					$equestions = 'ersquestions';
					$equestionsc = 'ersq_questions';
					$eid = 'ersq_id';
					break;
						
				case 'experimenten':
					$equestions = 'edsquestionsen';
					$equestionsc = 'edsq_questions';
					$eid = 'edsq_id';
					break;
						
				case 'resulten':
					$equestions = 'ersquestionsen';
					$equestionsc = 'ersq_questions';
					$eid = 'ersq_id';
					break;
					
				$sql = "UPDATE $equestions SET $equestionsc=? WHERE $eid=?";
			}	
			$stmt = $conn->prepare($sql);
			//Bind the variables
			$stmt->bind_param("si", $insert, $id);
			//Execute the prepared statement
			$stmt->execute();
			//Close the statement
			$stmt->close();		
			
			//If $id is not equal too maxq, then ++ $id
			if ($id !== $maxq) {
				$id ++;
			}
		}
		
		$id = '1';
		//Loop everthing that is posted for title
		foreach ($_POST['title'] as $title) {
			//Update the question titles that are requested.
			switch ($subject) {
				case 'experimentnl':
					$equestions = 'edsquestions';
					$etitle = 'edsq_questiontitle';
					$eid = 'edsq_id';
					break;
						
				case 'resultnl':
					$equestions = 'ersquestions';
					$etitle = 'ersq_questiontitle';
					$eid = 'ersq_id';
					break;
						
				case 'experimenten':
					$equestions = 'edsquestionsen';
					$etitle = 'edsq_questiontitle';
					$eid = 'edsq_id';
					break;
						
				case 'resulten':
					$equestions = 'ersquestionsen';
					$etitle = 'ersq_questiontitle';
					$eid = 'ersq_id';
					break;
					
					$sql = "UPDATE $equestions SET $etitle=? WHERE $eid=?";
			}
			$stmt = $conn->prepare($sql);
			//Bind the variables
			$stmt->bind_param("si", $title, $id);
			//Execute the prepared statement
			$stmt->execute();
			//Close the statement
			$stmt->close();		
			
			//If $id is equal to maxq, then send back.
			if ($id == $maxq) {
				header("Location: ../sheets.php?user=$userid&subject=$subject&button=save");
			}
			
			//If $id is not equal too maxq, then ++ $id
			if ($id !== $maxq) {
				$id ++;
			}
		}
	}
	
	//Check if add button is pressed
	if (isset($_POST['add'])) {	
		$maxq ++;
		$newtitle = 'New title';
		$newq = 'New question';
		
		switch ($subject) {
			case 'experimentnl':
				$equestions = 'edsquestions';
				$einsert = 'edsq_id, edsq_questiontitle, edsq_questions';
				break;
					
			case 'resultnl':
				$equestions = 'ersquestions';
				$einsert = 'ersq_id, ersq_questiontitle, ersq_questions';
				break;
					
			case 'experimenten':
				$equestions = 'edsquestionsen';
				$einsert = 'edsq_id, edsq_questiontitle, edsq_questions';
				break;
					
			case 'resulten':
				$equestions = 'ersquestionsen';
				$einsert = 'ersq_id, ersq_questiontitle, ersq_questions';
				break;
				
			$sql = "INSERT INTO $equestions (einsert) VALUES (?,?,?);";
		}
			$stmt = $conn->prepare($sql);
			//Bind the variables
			$stmt->bind_param("iss", $maxq, $newtitle, $newq);
			//Execute the prepared statement
			$stmt->execute();
			//Close the statement
			$stmt->close();
			
		header("Location: ../sheets.php?user=$userid&subject=$subject&button=add");
	}
?>