<button onclick="myFunction()" class="button btn btn-danger" id="tekst">Klik NIET op deze knop!</button>
	<script>
		function myFunction() {
			document.getElementById("body").style.fontFamily = "Comic Sans MS";
			document.getElementById("tekst").innerHTML='Wat heb je gedaan?';
		}
	</script>