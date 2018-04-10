<?php
	include_once ('header.php');
	include_once('includes/editproject.inc.php');
	include_once('includes/sessions.inc.php');
	
	//Get projectid
	$p = $_GET['p'];
	
			//Get the things from the url
		$user_id = $_GET['userid'];
?>

<!-- Add editor -->
<script src="ckeditor/ckeditor.js"></script>

<div class="container">
	<div class="row rowtitle">
		<div class="col-10">
			<!-- Page title -->
			<h1>Project aanpassen</h1>
		</div>
		
		<div class="col-2">	
			<a href="projectlist.php?q=edit&userid=<?php echo $user_id; ?>"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>
		</div>
	</div> <!-- End row -->

	<form action="includes/projectmodifications.inc.php?p=<?php echo $p; echo '&userid='; echo $user_id; ?>" method="POST">
	<!-- Is projected posted? -->
	<div class="row">
		<div class="col-12">
			<?php
				$posted = $_GET['add'];
				
				if ($posted == 'yes') {
					echo "project is upgedated";
				}
			?>
		</div>
	</div> <!-- End row -->
	
	<!-- Start inserting here -->
	<div class="row projectrow">
		<div class="col-12 col-md-6">
			<label>Titel project</label>
			<input type="text" name="title" value ="<?php echo $pro_title; ?>" required>
		</div>
		
		<div class="col-12 col-md-6">
			<label>Vak/onderwerp</label>
			<input type="text" name="subject" value="<?php echo $pro_subject; ?>" required>
		</div>
	</div> <!-- End row -->
	
	<div class="row projectrow">
		<div class="col-12 col-md-6">
			<label>Status project</label>
			<input type="radio" name="status" value="Online" required <?php if($pro_status == "Online"){echo "checked";} ?> >Online
			<input type="radio" name="status" value="Offline" <?php if($pro_status == "Offline"){echo "checked";} ?> >Offline
		</div>
		
		<div class="col-12 col-md-6">
			<label>Volgorde</label>
			<input type="text" name="order" value ="<?php echo $pro_order; ?>" required>
		</div>
	</div> <!-- End row -->
	
	<div class="row projectrow">
		<div class="col-12 col-md-6">
			<label>Grid</label>
			<input type="radio" name="grid" value="1" required <?php if($pro_grid == '1'){ echo 'checked';} ?>>XS, 250px
			<input type="radio" name="grid" value="2" <?php if($pro_grid == '2'){ echo 'checked';} ?>>SM, 325px
			<input type="radio" name="grid" value="3" <?php if($pro_grid == '3'){ echo 'checked';} ?>>M, 400px
			<input type="radio" name="grid" value="4" <?php if($pro_grid == '4'){ echo 'checked';} ?>>L, 475px
		</div>
	</div> <!-- End row -->
	
		<div class="row projectrow">
		<div class="col-12">
			<label>Methode</label>
			<span class="inputspan"><input type="checkbox" name="method[]" value="werkplaats" id="checkboxw" onclick="myFunction()" <?php if(!empty($pro_werkplaats)){echo 'checked';} ?>>Werkplaats</span>
			<span class="inputspan"><input type="checkbox" name="method[]" value="bieb" id="checkboxb" onclick="myFunction()" <?php if(!empty($pro_bieb)){echo 'checked';} ?>>Bieb</span>
			<span class="inputspan"><input type="checkbox" name="method[]" value="veld" id="checkboxv" onclick="myFunction()" <?php if(!empty($pro_veld)){echo 'checked';} ?>>Veld</span>
			<span class="inputspan"><input type="checkbox" name="method[]" value="lab" id="checkboxl" onclick="myFunction()" <?php if(!empty($pro_lab)){echo 'checked';} ?>>Lab</span>
			<span class="inputspan"><input type="checkbox" name="method[]" value="showroom" id="checkboxs" onclick="myFunction()" <?php if(!empty($pro_showroom)){echo 'checked';} ?>>Showroom</span>
		</div>
		
		<div class="col-12">
			<textarea id="werkplaats" type="text" name="contentwerkplaats" <?php if(!empty($pro_werkplaats)){echo 'style="display: block"';}else{echo 'style="display: none" placeholder="Omschrijving werkplaats"';} ?>><?php if(!empty($pro_werkplaats)){echo $pro_werkplaats;} ?></textarea>
			<textarea id="bieb" type="text" name="contentbieb" <?php if(!empty($pro_bieb)){echo 'style="display: block"';}else{echo 'style="display: none" placeholder="Omschrijving bieb"';} ?>><?php if(!empty($pro_bieb)){echo $pro_bieb;} ?></textarea>
			<textarea id="veld" type="text" name="contentveld" <?php if(!empty($pro_veld)){echo 'style="display: block"';}else{echo 'style="display: none" placeholder="Omschrijving veld"';} ?>><?php if(!empty($pro_veld)){echo $pro_veld;} ?></textarea>
			<textarea id="lab" type="text" name="contentlab"  <?php if(!empty($pro_lab)){echo 'style="display: block"';}else{echo 'style="display: none" placeholder="Omschrijving lab"';} ?>><?php if(!empty($pro_lab)){echo $pro_lab;} ?></textarea>
			<textarea id="showroom" type="text" name="contentshowroom"  <?php if(!empty($pro_showroom)){echo 'style="display: block"';}else{echo 'style="display: none" placeholder="Omschrijving showroom"';} ?>><?php if(!empty($pro_showroom)){echo $pro_showroom;} ?></textarea>
		</div>
	</div> <!-- End row -->
		
		<div class="row">
			<div class="col-12">
				<label>Tekst</label>
				<textarea id="editor1" type="text" name="content" required><?php echo $pro_content; ?></textarea>
			</div>
		</div> <!-- End row -->
	
		<div class="row">
			<div class="col-12 col-md-2">
				<input name="edit" type="submit" value="Aanpassen" class="btn btn-default pull-right" />
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
</script>

<?php
	include_once ('footer.php');
?>