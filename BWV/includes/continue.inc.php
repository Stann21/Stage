<?php
include_once ('dbh.inc.php');

$userid = $_GET['user'];

	//Get user language
	$sql = "SELECT user_lan FROM users WHERE user_id = ?";
	$stmt = $conn->prepare($sql);
	//Select the variabl that needs to be inserted on the ?
	$stmt->bind_param("i", $userid);
	//Execute the prepared statement
	$stmt->execute();
	//Set in what variable the result needs to be.
	$stmt->bind_result($user_lan);
	//Fetch the result
	while($stmt->fetch())
	{
	}
	//Close the statement
	$stmt->close();
	
	//Get max. question id for Cexperiment
	if ($user_lan == "NL") {
	$eds = "edsquestions";
	}	
	if ($user_lan == "EN") {
		$eds = "edsquestionsen";
	}
	
	//Get user language
	$sql = "SELECT * FROM $eds ORDER BY edsq_id DESC LIMIT 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$expmaxq = $row["edsq_id"];
		}
	}
	
	//Setup var for checking
	$Cexperiment = '1';
	$checker = '1';
	
	//Get all the answers from the right user
	$sql = "SELECT edsa_questionid, edsa_experimentid FROM edsanswers WHERE edsa_userid = ? ORDER BY edsa_experimentid";
	$stmt = $conn->prepare($sql);
	//Select the variabl that needs to be inserted on the ?
	$stmt->bind_param("i", $userid);
	//Execute the prepared statement
	$stmt->execute();
	//Set in what variable the result needs to be.
	$stmt->bind_result($Equestionid, $Cexperimentid);
	//Fetch the result
	while($stmt->fetch())
	{
		//Check the right Cexperiment
		if ($Cexperiment == $Cexperimentid) {
			//Check if there is a questionid in the db.
			if ($checker == $Equestionid) {
				$checker ++;
				$expfinal = $checker;
						
				//If checker is bigger then the maxq, then conintue with checking Cresults.
				if ($checker > $expmaxq) {
					//Reset checker
					$checker = '1';
					$Cexperiment ++;
				}
			}
		}
	}
	//Close the statement
	$stmt->close();
	
	//Check if there is an experiment
	$sql = "SELECT * FROM experimenten WHERE exp_userid=$userid AND exp_experimentid=$Cexperiment";
	$result = $conn->query($sql);
		if ($result->num_rows == 0) {
				$expempty = 'yes';
			}else {
				$expempty = 'no';
			}
		
		//Setup var for checking
		$Cresults = '1';
		$checker = '1';
		
		if (empty($expfinal)) {
			$expfinal = '1';
		}
		
		if (empty($name)) {
			$name = 'experiment';
		}
		
		if (empty($finalsid)) {
			$finalsid = '1';
		}
		
		if (empty($finalqid)) {
			$finalqid = '1';
		}
		
		//If experiments are smaller then Cresults, then continue with experiments.
		if ($Cexperiment > $Cresults && $expfinal <= $expmaxq) {
			$name = 'experiment';
			$finalsid = $Cexperiment;
			$finalqid = $expfinal;
		}
		
		if ($expfinal > $expmaxq) {
			$expfinal = '1';
			$finalsid = $Cexperiment;
		}
?>