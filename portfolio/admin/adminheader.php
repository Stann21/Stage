<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="admincss.css">
		
		<!-- Bootstrap -->
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="../bootstrap/js/bootstrap.js"></script>
		<!-- Einde Bootstrap -->


        <nav class="navbar navbar-default header">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="adminpagina.php">Stan Gloudemans</a>
                </div>

                <ul class="nav navbar-nav pull-right">
                    <li><a href="../index.php" target="_blank"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
                </ul>
            </div><!-- container-fluid -->
        </nav>
		
		<div class="container-fluid">
			<?php require_once ('helppage.php'); ?>
		</div> <!-- Container-fluid -->
    </head>
</html>