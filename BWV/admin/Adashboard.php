<?php
	include_once ('../header.php');
	session_start();
	
       $user = $_GET['user'];
?>

<html>
	<body>
		<div class="container">
		<?php 
			include_once ('../left.php');
		?>
				
			<div class="col-xs-8">
                <?php
                if (isset($_SESSION['u_id'])){
					echo '<p><a href="Asignup.php?signup=normal&user=1">Sign up</a></p>
					<p><a href="Agroups.php?delete=0&user=1">Groups</a></p>
					<p><a href="Ausers.php?user=1">Users</a></p>';
                }
                ?>
			</div> <!-- col-xs-8  -->
		</div> <!-- Container -->
	</body>
</html>

<?php
	include_once ('../footer.php');
?>