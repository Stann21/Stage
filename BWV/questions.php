<?php
	include_once ('header.php');
	include_once ('includes/dbh.inc.php');
	include_once ('includes/sessions.inc.php');
	
	$questionid = $_GET['questionid'];
	$userid = $_GET['user'];
	$experimentid = $_GET['experiment'];
	
	//Check if it is a result page.
	if (empty ($_GET['results'])) {
		$results = '0';
		$pagecheck = '1';
		$title = 'Experiment Design ';
	}else {
		$results = $_GET['results'];
		$pagecheck = '2';
		$title = 'Results Reporting ';
	}
	
	//Check language from user
	$sql = "SELECT user_lan FROM users WHERE user_id = ?";
	$stmt = $conn->prepare($sql);
	//Select the variabl that needs to be inserted on the ?
	$stmt->bind_param("i", $userid);
	//Execute the prepared statement
	$stmt->execute();
	//Set in what variable the result needs to be.
	$stmt->bind_result($user_lan);
	//Fetch the result
	while($stmt->fetch()) {
	}
	//Close the statement
	$stmt->close();
		
	//Get max. question id for Experiment
	$sql = "SELECT * FROM edsquestions ORDER BY edsq_id DESC LIMIT 1";
	$result = $conn->query($sql);
			
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				//Experiment
				$maxq = $row["edsq_id"];
			}
		}
	
	
?>

<html>
	<body>
		<?php 
			include_once ('left.php');
		?>
	
		<div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 centerdiv whitespace">	
		
			<?php  
				echo '<h1 class="text-left qpagetitle">';
					echo $title;
					if ($pagecheck == '1') {
						echo $experimentid;
					}
					if ($pagecheck == '2') {
						echo $results;
					}

				echo '</h1>';
			
			//Experiment sql
			if ($pagecheck == '1') {
				//Check language
				if ($user_lan == 'NL') {
					$equestions = 'edsquestions';
				}
				if ($user_lan == 'EN') {
					$equestions = 'edsquestionsen';
				}
				$sql = "SELECT edsq_id, edsq_questiontitle, edsq_questions FROM $equestions WHERE edsq_id = ?";
			}
			//Result sql
			if ($pagecheck == '2') {
				//Check language
				if ($user_lan == 'NL') {
					$equestions = 'ersquestions';
				}
				if ($user_lan == 'EN') {
					$equestions = 'ersquestionsen';
				}
				$sql = "SELECT ersq_id, ersq_questiontitle, ersq_questions FROM $equestions WHERE ersq_id = ?";
			}
	
		$stmt = $conn->prepare($sql);
		//Select the variabl that needs to be inserted on the ?
		$stmt->bind_param("i", $questionid);
		//Execute the prepared statement
		$stmt->execute();
		//Set in what variable the result needs to be.
		$stmt->bind_result($id, $questiontitle, $questions);
		//Fetch the result
		while($stmt->fetch())
		{
		echo '<div class="row">';	
			echo '<div class="col-xs-10">';
					echo '<p class="marginreset questiontitle">';
						echo $id;
						echo '. ';
						echo $questiontitle;
					echo '</p>';
							
					echo '<p>';
						echo $questions;
					echo '</p>';
			echo '</div>';
		}
		//Close the statement
		$stmt->close();
								
		echo '<div class="col-xs-2 showhelp">';
			//Help page
			include_once('includes/help.inc.php');
		echo '</div>';
		
		//Experiment SQL
		if ($pagecheck == '1') {
			//Look for a answer that matches the userid, experimentid and questionid.
			$sql = "SELECT edsa_answer FROM edsanswers WHERE edsa_userid=? AND edsa_experimentid=? AND edsa_questionid=?";

		}
				
		//Result SQL
		if ($pagecheck == '2') {
			//Look for a answer that matches the userid, experimentid and questionid.
			$sql = "SELECT ersa_answer FROM ersanswers WHERE ersa_userid=? AND ersa_resultid=? AND ersa_questionid=? AND ersa_experimentid=?";		
	
		}
		
		$stmt = $conn->prepare($sql);
		//Select the variable that needs to be inserted on the ?
			if ($pagecheck == '1') {
				$stmt->bind_param("iii", $userid, $experimentid, $questionid);
			}
			
			if ($pagecheck == '2') {
				$stmt->bind_param("iiii", $userid, $results, $questionid, $experimentid);
			}
		//Execute the prepared statement
		$stmt->execute();
		//Set in what variable the result needs to be.
		$stmt->bind_result($answer);
		//Fetch the result
		while($stmt->fetch())
		{
		}
		//Close the statement
		$stmt->close();
		?>
				
			<?php 
			//Experiment
			if ( $pagecheck == '1') {
				echo '<form action="includes/question.inc.php?questionid=';echo $questionid;echo '&user=';echo $userid;echo '&experiment=';echo $experimentid;echo '" method="POST">';
			}
			//Results
			if ( $pagecheck == '2') {
				echo '<form action="includes/question.inc.php?&questionid=';echo $questionid;echo '&user=';echo $userid;echo '&experiment=';echo $experimentid;echo '&results='; echo $results; echo '" method="POST">';
			}
			?>
				<div class="Col-xs-12 paddingreset">
					<textarea name="answer" class="Qanswerbox" autofocus><?php echo $answer; ?></textarea>
				</div> <!-- Einde col -->
				
				<div class="col-xs-12 progressdiv">
					<?php include_once ('includes/progressbar.inc.php'); ?>
				</div><!-- End col -->
				
				<div class="col-xs-12 questionitems">
					<input name="overview" type="submit" value="<?php echo $TRoverview; ?>" class="btn btn-default pull-right" />
					<input name="save" type="submit" value="<?php echo $TRsave; ?>" class="btn btn-default pull-right" />
			</form>
				</div><!-- Einde col -->
		</div> <!-- Einde Col -->
		
		<?php 
			include_once ('right.php');
		?>
	</body>
</html>

<?php
	include_once ('footer.php');
?>