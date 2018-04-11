<html>
	<head>
    <title>Drag & Drop</title>

		<!-- Bootstrap -->
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
			<link href="css.css" rel="stylesheet">
		<!-- Einde Bootstrap -->
		
	<!-- Drag & drop -->
		<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
		<script src="html5sortable/docs/html5sortable.js"></script>
	</head>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col col-9 room">
				<div class="roomsize">
				<?php
					//The variables to get the grid right.
					$maxrow = '14';
					$row = '1';
					$maxbox = '14';
					$box = '1';
					$id = '1';
					
					// As long as the variable row is smaller then the maxrow, the loop runs.
					while ($row < $maxrow) {
						//As long as the variable box is smaller then the maxbox, the loop runs.
						while ($box < $maxbox) {
							//Echo a single box
							echo '<div id="kamerbox'; echo $id; echo '" ondrop="drop(event, this)" ondragover="allowDrop(event)" class="js-sortable-copy-target roombox" data-box="';echo $box; echo'" data-row="'; echo $row; echo'"></div>';
							//Make the variable box one bigger.
							$box ++;
							$id ++;
						}
						//Make the variable row one bigger.
						$row ++;
						//Set the box to zero again.
						$box = '1';
					}
				?>
		
				</div><!-- End room-size -->
			</div> <!-- End room -->
			<div class="col-3 furniture">
				<!-- Category -->
				<div class="col-12 borderbottom scroll" id="category">
					<div class="float-left col col-6">
						<a href="index.php?id=bed">
							<img src="images/bed/bed1.png" class="imagebox catimg" />
							<p class="imagetext">Bedden</p>
						</a>
					</div>
					
					<div class="float-left col col-6">
						<a href="index.php?id=kast">
							<img src="images/kast/kast1.png" class="imagebox catimg" />
							<p class="imagetext">Kasten</p>	
						</a>
					</div>
					
					<div class="float-left col col-6">
						<a href="index.php?id=vloerkleed">
							<img src="images/kast/kast1.png" class="imagebox catimg" />
							<p class="imagetext">Vloerkleed</p>	
						</a>
					</div>
					
					<div class="float-left col col-6">
						<a href="#">
							<img src="images/kast/kast1.png" class="imagebox catimg" />
							<p class="imagetext">Vloerkleed</p>	
						</a>
					</div>
					
					<div class="float-left">
						<a href="#">
							<div class="col col-6">
								<img src="images/kast/kast1.png" class="imagebox catimg" />
								<p class="imagetext">Vloerkleed</p>
							</div>		
						</a>
					</div>
				</div>
				
				<!-- Furniture -->
				<div class="col col-12 float-left borderbottom scroll">				
				<?php
					$category = $_GET["id"];
					
					if ($category == "bed") {
						echo '
							<div class="col col-6 float-left">	
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag1" draggable="true" ondragstart="drag(event)" class="imagebox" data-name="bed"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag2" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag3" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag4" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag5" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag6" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)"  class="js-sortable-copy">
									<div id="drag7" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag8" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag9" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->
							
							<div class="col col-6 float-left">
								<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
									<div id="drag10" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
								</div> <!-- End ondrop -->
								<p class="imagetext">Bedden</p>
							</div> <!-- End float-left -->';
					}
					
					if ($category == "kast") {
						echo '<div class="col col-6 float-left">
							<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
								<div id="drag11" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
							</div> <!-- End ondrop -->
							<p class="imagetext">Kast</p>
						</div> <!-- End float-left -->
						
						<div class="col col-6 float-left">
							<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
								<div id="drag12" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
							</div> <!-- End ondrop -->
							<p class="imagetext">Kast</p>
						</div> <!-- End float-left -->
						
						<div class="col col-6 float-left">
							<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
								<div id="drag13" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
							</div> <!-- End ondrop -->
							<p class="imagetext">Kast</p>
						</div> <!-- End float-left -->
						
						<div class="col col-6 float-left">
							<div ondrop="drop(event)" ondragover="allowDrop(event)" ondragend="check(event)" class="js-sortable-copy">
								<div id="drag14" draggable="true" ondragstart="drag(event)" class="imagebox"></div>
							</div> <!-- End ondrop -->
							<p class="imagetext">Kast</p>
						</div> <!-- End float-left -->';
					}

				?>
			</div> <!-- End furniture -->
				
				<!-- Filters -->
				<div class="col col-12 float-left">
				<p>Filter</p>
					<div class="col col-6 float-left">
						<select>
						  <option value="prijs">Prijs</option>
						</select>
					</div>
					<div class="col col-6 float-left">
						<select>
						  <option value="maat">Maat</option>
						</select>
					</div>
					<div class="col col-6 float-left">
						<select>
						  <option value="kleur">Kleur</option>
						</select>
					</div>
					<div class="col col-6 float-left">
						<select>
						  <option value="merk">Merk</option>
						</select>
					</div>
				</div>
			</div>
		</div> <!-- End row -->
		
		<div class="row bottommenu">
			<div class="col col-2">
				Aantal items
			</div>
			
			<div class="col col-5">
				Prijs
			</div>
			
			<div class="col col-2">
				<button type="button" class="btn btn-standard">Shop</button>
			</div>
			
			<div class="col col-3">
				<button  type="reset" value="Reset" class="btn btn-standard" onclick="resetFunction()" >Reset</button>
				<button type="button" class="btn btn-standard">Opslaan</button>				
				<button type="button" class="btn btn-standard">Verder</button>			
			</div>
		</div>
	</div> <!-- End container -->
	
	<footer>
	    <!-- Bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
		<!-- Einde bootstrap -->
	</footer>
</html>

<script>
	var data;
	var currentbox;
	var currentrow;

    function allowDrop(ev) {
        ev.preventDefault();
    }
	
	//?? If the data is draged, ten transfer the data.
    function drag(ev) {
        ev.dataTransfer.setData('text', ev.target.id);
    }

    function drop(ev, target) {
        ev.preventDefault();
		//Get the data that is being dropped.
        data = ev.dataTransfer.getData("text");
		//Send the alerts for the boxid and whats being dragged.
			//alert(data)
			//alert(target.id)
		//Get the box and row id.
		currentbox = document.getElementById(target.id).getAttribute('data-box');
		currentrow = document.getElementById(target.id).getAttribute('data-row');
		//Alert the box and row id.
			//alert(currentbox)
			//alert(currentrow)
    }

	
	function check(ev){
		//Name of object that needs to be checked.
		//var data = "drag3";
		//alert (data);
	
		//Current row and box check
		//alert (currentbox);
		//alert (currentrow);
	
		//Set max row and box var
		var maxrow = "14";
		var maxbox =  "14";
		
		//TODO: Get data from a db.
		var bedrow = "2";
		var bedbox = "2";
		
		//Check if the object is bigger then the row
		var rowcheck = +bedrow + +currentrow;
		if (rowcheck > maxrow) {
			alert("Let op! Je kunt je meubel hier niet plaatsen.")
			
			var item = document.getElementById(data);
			item.parentNode.removeChild(item)
		}
		
		//Check if the object is bigger then the box
		var boxcheck = +bedbox + +currentbox;
		if (boxcheck > maxbox) {
			alert("Let op! Je kunt je meubel hier niet plaatsen.")
			
			var item = document.getElementById(data);
			item.parentNode.removeChild(item)
		}
	}

	//Copy the objects so that it moves into the grid.
	sortable('.js-sortable-copy', {
      forcePlaceholderSize: true,
      copy: true,
			acceptFrom: false,
    });
	sortable('.js-sortable-copy-target', {
    forcePlaceholderSize: true,
		acceptFrom: '.js-sortable-copy,.js-sortable-copy-target',
  });

	//Reset function
	function resetFunction() {
    var reset = confirm("Je staat op het punt om de kamer te resetten.");
    if (reset == true) {
		window.location.reload()
    }
}
</script>