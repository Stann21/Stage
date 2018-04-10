<?php
	include_once ('../header.php');
	include_once('../includes/dbh.inc.php');
	session_start();
	
	$user = $_GET['user'];
?>

<html>
	<body>
		<div class="container">
            <div class="col-xs-4">
                <?php
                if (isset($_SESSION['u_id'])) {
                    echo 'You are logged in!';
					echo '<a href="Adashboard.php?user=1">Home</a>';
					
					echo '<form action="../includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit">Logout</button>
                    </form>';
					  
                }
                ?>
			</div> <!-- col-xs-4 -->
			
			<!-- Groups -->
			<div class="col-xs-4">
				<?php
                if (isset($_SESSION['u_id'])) {
							echo '<form action="../includes/group.inc.php" method="POST">
							<p>
								<label>Group name</label>
								<input type="text" name="groupname" class="Input" placeholder="Group name" required>
							</p>
							<input name="submit" type="Submit" value="Groep toevoegen" class="btn btn-default" />
							</form>';
					
					//Show all groups.
					echo '<form action="../includes/group.inc.php" method="POST">';
					$sql = "SELECT * FROM groups";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
						$groupname = $row["groups_groupname"];
						$id = $row["groups_id"];
						
						echo '<p>';
						echo $groupname;
						echo '<input type="radio" name="deleteid" value="';echo $id;echo '"></p>';
						}
						echo '<button name="delete" type="submit" class="btn btn-danger" />Delete group</span></button>';
						echo '</form>';
					}
				}
                ?>
			</div> <!-- col-xs-4 -->
				
			<!-- Users list -->
			<div class="col-xs-4">
                <?php
                if (isset($_SESSION['u_id'])) {
					$sql = "SELECT * FROM users";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
						$id = $row["user_id"];
						$first = $row["user_first"];
						$last = $row["user_last"];
						$mail = $row["user_email"];
						$company = $row["user_company"];
						$groups = $row["user_groups"];
						
						echo $id;
						echo $first;
						echo $last;
						echo $mail;
						echo $company;
						echo $groups;
						echo '<br>';
						}
					}
				}
                ?>
			</div> <!-- col-xs-4  -->
		</div> <!-- Container -->
	</body>
</html>

<?php
	include_once ('../footer.php');
?>