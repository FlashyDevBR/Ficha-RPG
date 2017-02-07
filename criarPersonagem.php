<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHPlayer - Personagem Criado !</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Main.css -->
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body class="white">
		
		<?php
			//Get all informations
			$nome = $_POST["nome"];
			$idade = $_POST["idade"];
			$altura = $_POST["altura"];
			$peso = $_POST["peso"];
			$sexo = $_POST["sexo"];
			$level = $_POST["level"];
			$vida = $_POST["vida"];
			$mana = $_POST["mana"];
			$raca = $_POST["raca"];
			$classe = $_POST["classe"];
			$forca = $_POST["forca"];
			$constituicao = $_POST["constituicao"];
			$destreza = $_POST["destreza"];
			$inteligencia = $_POST["inteligencia"];
			$sabedoria = $_POST["sabedoria"];
			$carisma = $_POST["carisma"];
			$equipamentos = explode(",", $_POST["equipamento"]);
			$habilidades = explode(",", $_POST["habilidades"]);
			$info = ($_POST["info"] <> "") ? $_POST["info"] : "Nenhuma informação extra";
			$historia = nl2br($_POST["historia"]);

			?>
			<div class="container">
				<div class="row hidden-print">
					<div class="col-xs-12">
						<h4>Personagem criado com sucesso !</h4> 
						Clique <a href=javascript:print();>aqui</a> para imprimir <br>
						Ou Clique <a href="index.php">aqui</a> para criar outra ficha !
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<?php
							//Show the avatar based on Sex, Race and Class
							if($sexo == "Masculino") {
								if($raca == "Humano") {
									if($classe == "Fighter") {
										$avatar = "mhumanFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "mhumanWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "mhumanCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "mhumanRogue.jpg";
									}
									else {
										$avatar = "mhumanRanger.jpg";
									}
								}
								elseif($raca == "Elf") {
									if($classe == "Fighter") {
										$avatar = "melfFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "melfWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "melfCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "melfRogue.jpg";
									}
									else {
										$avatar = "melfRanger.jpg";
									}
								}
								elseif($raca == "Dwarf") {
									if($classe == "Fighter") {
										$avatar = "mdwarfFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "mdwarfWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "mdwarfCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "mdwarfRogue.jpg";
									}
									else {
										$avatar = "mdwarfRanger.jpg";
									}
								}
								elseif($raca == "Halfling") {
									if($classe == "Fighter") {
										$avatar = "mhalfFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "mhalfWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "mhalfCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "mhalfRogue.jpg";
									}
									else {
										$avatar = "mhalfRanger.jpg";
									}
								}
								elseif($raca == "Gnome") {
									if($classe == "Fighter") {
										$avatar = "mgnomeFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "mgnomeWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "mgnomeCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "mgnomeRogue.jpg";
									}
									else {
										$avatar = "mgnomeRanger.jpg";
									}
								}
								else {
									if($classe == "Fighter") {
										$avatar = "morcFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "morcWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "morcCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "morcRogue.jpg";
									}
									else {
										$avatar = "morcRanger.jpg";
									}
								}
							}
							else {
								if($raca == "Humano") {
									if($classe == "Fighter") {
										$avatar = "fhumanFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "fhumanWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "fhumanCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "fhumanRogue.jpg";
									}
									else {
										$avatar = "fhumanRanger.jpg";
									}
								}
								elseif($raca == "Elf") {
									if($classe == "Fighter") {
										$avatar = "felfFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "felfWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "felfCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "felfRogue.jpg";
									}
									else {
										$avatar = "felfRanger.jpg";
									}
								}
								elseif($raca == "Dwarf") {
									if($classe == "Fighter") {
										$avatar = "fdwarfFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "fdwarfWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "fdwarfCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "fdwarfRogue.jpg";
									}
									else {
										$avatar = "fdwarfRanger.jpg";
									}
								}
								elseif($raca == "Halfling") {
									if($classe == "Fighter") {
										$avatar = "fhalfFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "fhalfWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "fhalfCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "fhalfRogue.jpg";
									}
									else {
										$avatar = "fhalfRanger.jpg";
									}
								}
								elseif($raca == "Gnome") {
									if($classe == "Fighter") {
										$avatar = "fgnomeFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "fgnomeWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "fgnomeCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "fgnomeRogue.jpg";
									}
									else {
										$avatar = "fgnomeRanger.jpg";
									}
								}
								else {
									if($classe == "Fighter") {
										$avatar = "forcFighter.jpg";
									}
									elseif($classe == "Wizard") {
										$avatar = "forcWizard.jpg";
									}
									elseif($classe == "Cleric") {
										$avatar = "forcCleric.jpg";
									}
									elseif($classe == "Rogue") {
										$avatar = "forcRogue.jpg";
									}
									else {
										$avatar = "forcRanger.jpg";
									}
								}
							}
						?>
						<img src="img/<?php echo $avatar; ?>" alt="Avatar" class="img-responsive" />
					</div>
					<div class="col-xs-6">
						<?php
							//Show all information
							echo "<h1 class='alt'>$nome</h1><br />";
							echo "<strong>Idade:</strong><span class='info'>$idade anos</span>";
							echo "<strong>Altura:</strong><span class='info'>$altura M</span>";
							echo "<strong>Peso:</strong><span class='info'>$peso Kg</span>";
							echo "<strong>Sexo:</strong><span class='info'>$sexo</span><br /><br />";
							echo "<strong>Level:</strong><span class='info'>$level</span>";
							echo "<strong>Vida:</strong><span class='info'>$vida HP</span>";
							echo "<strong>Mana:</strong><span class='info'>$mana MP</span><br /><br />";
							echo "<strong>Raça:</strong><span class='info'>$raca</span>";
							echo "<strong>Classe:</strong><span class='info'>$classe</span><br /><br />";
							echo "<h3>Atributos:</h3>";
							echo "<ul class='list-group pequeno'>";
							echo "<li class='list-group-item'><span class='badge'>$forca</span>Força</li>";
							echo "<li class='list-group-item'><span class='badge'>$constituicao</span>Constituição</li>";
							echo "<li class='list-group-item'><span class='badge'>$destreza</span>Destreza</li>";
							echo "<li class='list-group-item'><span class='badge'>$inteligencia</span>Inteligência</li>";
							echo "<li class='list-group-item'><span class='badge'>$sabedoria</span>Sabedoria</li>";
							echo "<li class='list-group-item'><span class='badge'>$carisma</span>Carisma</li>";
							echo "</ul>";
							echo "<h2>Equipamentos:</h2><br />";
							echo "<ul class='list-group'>";
							foreach($equipamentos as $e) {
								echo "<li class='list-group-item'>$e</li>";
							}
							echo "</ul>";
							echo "<h2>Habilidades</h2><br />";
							echo "<ul class='list-group'>";
							foreach($habilidades as $h) {
								echo "<li class='list-group-item'>$h</li>";
							}
							echo "</ul>";
							
						?>						
					</div>					
				</div>
				<div class="row">
					<div class="col-xs-3">
						<?php
							echo "<h2>Informações Extras</h2><br />";
							echo "<p>$info</p>";
						?>

					</div>
					<div class="col-xs-8 col-xs-offset-1">
						<?php
							echo "<h2>História</h2><br />";
							echo "<p class='text-left infoHistoria'>$historia</p>";
						?>
					</div>
				</div>
			</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Main.js -->
		<script src="js/main.js"></script>
	</body>
</html>