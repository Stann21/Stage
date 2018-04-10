<?php
	include_once ('header.php');
	include_once('includes/sessions.inc.php');
	include_once('includes/connect.inc.php');
	
	//Get the things from the url
	$user_id = $_GET['userid'];
?>

<!-- Add editor -->
<script src="ckeditor/ckeditor.js"></script>

<div class="container">
	<!-- Page title -->
	<div class="row rowtitle">
		<div class="col-10">
			<h1>Project toevoegen</h1>
		</div>
		
		<div class="col-2">
			<a href="dashboard.php?userid=<?php echo $user_id; ?>"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>
		</div>
	</div> <!-- End row -->

	<form action="includes/projectmodifications.inc.php?userid=<?php echo $user_id; ?>" method="POST">
	<!-- Is projected posted? -->
	<div class="row">
		<?php
			$posted = $_GET['add'];
			
			if ($posted == 'yes') {
				echo "<div class='col-12'>";
					echo "Project is ingevoerd";
				echo "</div>";
			}
		?>
	</div> <!-- End row -->
	
	<!-- Start inserting here -->
	<div class="row projectrow">
		<div class="col-12 col-md-6">
			<label>Titel project</label>
			<input type="text" name="title" placeholder ="Title project" required>
		</div>
		
		<div class="col-12 col-md-6">
			<label>Vak/onderwerp</label>
			<?php		
			$sql = "SELECT * FROM subjects";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$sub_semester = $row['sub_semester'];
					$sub_name = $row['sub_name'];
						
					echo $sub_semester;
					echo ' ';
					echo $sub_name;
					echo '<input type="radio" name="subject" id="subject" value="'; echo $sub_name; echo'" required>';
				}
			}
			?>
		</div>
	</div> <!-- End row -->
	
	<div class="row projectrow">
		<div class="col-12 col-md-6">
			<label>Status project</label>
			<span class="inputspan"><input type="radio" name="status" value="Online" checked required>Online</span>
			<span class="inputspan"><input type="radio" name="status" value="Offline">Offline</span>
		</div>
		
		<div class="col-12 col-md-6">
			<label>Volgorde</label>
			<input type="text" name="order" placeholder ="1" required>
			<span class="inputspan"><input type="checkbox" name="orderlist" value="orderlist" onclick="showOrderList()" id="checkboxo">Show orderlist</span>
		</div>
	</div> <!-- End row -->
		
	<div class="row projectrow">
		<div class="col-12 col-md-6">
			<label>Cover afbeelding</label>
			<input type="file" name="coverimage" required>
		</div>
		
		<div class="col-12 col-md-6">
			<label>Grid</label>
			<span class="inputspan"><input type="radio" name="grid" value="1" checked required>XS, 250px</span>
			<span class="inputspan"><input type="radio" name="grid" value="2">SM, 325px</span>
			<span class="inputspan"><input type="radio" name="grid" value="3">M, 400px</span>
			<span class="inputspan"><input type="radio" name="grid" value="4">L, 475px</span>
		</div>
	</div> <!-- End row -->
	
	<div class="row projectrow">
		<div class="col-12">
			<label>Methode</label>
			<span class="inputspan"><input type="checkbox" name="method[]" value="werkplaats" id="checkboxw" onclick="myFunction()">Werkplaats</span>
			<span class="inputspan"><input type="checkbox" name="method[]" value="bieb" id="checkboxb" onclick="myFunction()">Bieb</span>
			<span class="inputspan"><input type="checkbox" name="method[]" value="veld" id="checkboxv" onclick="myFunction()">Veld</span>
			<span class="inputspan"><input type="checkbox" name="method[]" value="lab" id="checkboxl" onclick="myFunction()">Lab</span>
			<span class="inputspan"><input type="checkbox" name="method[]" value="showroom" id="checkboxs" onclick="myFunction()">Showroom</span>
		</div>
		
		<div class="col-12">
			<textarea class="cmdinsert" id="werkplaats" type="text" name="contentwerkplaats" style="display:none" placeholder="Omschrijving werkplaats"></textarea>
			<textarea class="cmdinsert" id="bieb" type="text" name="contentbieb"  style="display:none" placeholder="Omschrijving bieb"></textarea>
			<textarea class="cmdinsert" id="veld" type="text" name="contentveld"  style="display:none" placeholder="Omschrijving veld"></textarea>
			<textarea class="cmdinsert" id="lab" type="text" name="contentlab"  style="display:none" placeholder="Omschrijving lab"></textarea>
			<textarea class="cmdinsert" id="showroom" type="text" name="contentshowroom"  style="display:none" placeholder="Omschrijving showroom"></textarea>
			<div id="orderlist" type="text" name="orderlist"  style="display:none">
			
			<table>
				<thead>
					<tr>
						<th scope="col">Naam project</th>
						<th scope="col">Volgorde</th>
						<th scope="col">Vak</th>
					</tr>
				</thead>
				<tbody>
			<?php
				$sql = "SELECT * FROM projects ORDER BY pro_subject";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$pro_title = $row["pro_title"];
						$pro_order = $row["pro_order"];
						$pro_subject = $row["pro_subject"];
						
						echo '<tr>';
						echo '<td>'; echo $pro_title; echo '</td>';
						echo '<td>'; echo $pro_order; echo '</td>';
						echo '<td>'; echo $pro_subject; echo '</td>';
						echo '</tr>';
					}
				}
			?>
				</tbody>
			</table>
			</div>
		</div>
	</div> <!-- End row -->
		
	<div class="row projectrow">
		<div class="col-12">
			<label>Tekst</label>
			<textarea id="editor1" type="text" name="content" required>Hier komt de content</textarea>
		</div>
	</div> <!-- End row -->
	
	<div class="row">
		<div class="col-12 col-md-2">
			<input name="add" type="submit" value="Toevoegen" class="btn btn-default pull-right" />
		</div>
	</div> <!-- End row -->
	</form>
</div> <!-- End container -->

<!-- Replace the id editor1 with the CKEeditor -->
<script>
	CKEDITOR.replace( 'editor1' );
	
function myFunction() {
	// Get the checkbox
	var checkBoxw = document.getElementById("checkboxw");
	var checkBoxb = document.getElementById("checkboxb");
	var checkBoxv = document.getElementById("checkboxv");
	var checkBoxl = document.getElementById("checkboxl");
	var checkBoxs = document.getElementById("checkboxs");
	
	// Get the output text
	var textw = document.getElementById("werkplaats");
	var textb = document.getElementById("bieb");
	var textv = document.getElementById("veld");
	var textl = document.getElementById("lab");
	var texts = document.getElementById("showroom");

  // If the checkbox is checked, display the output text
  if (checkBoxw.checked == true){
    textw.style.display = "block";
  } else {
    textw.style.display = "none";
  }
  
   if (checkBoxb.checked == true){
    textb.style.display = "block";
  } else {
    textb.style.display = "none";
  }
  
   if (checkBoxv.checked == true){
    textv.style.display = "block";
  } else {
    textv.style.display = "none";
  }
  
   if (checkBoxl.checked == true){
    textl.style.display = "block";
  } else {
    textl.style.display = "none";
  }
   if (checkBoxs.checked == true){
    texts.style.display = "block";
  } else {
    texts.style.display = "none";
  }
}

function showOrderList() {
	// Get the checkbox
	var checkBoxo = document.getElementById("checkboxo");
	
	// Get the output text
	var texto = document.getElementById("orderlist");
	
	if (checkBoxo.checked == true){
    texto.style.display = "block";
  } else {
    texto.style.display = "none";
  }
  
}
</script>

<?php
	include_once ('footer.php');
?>