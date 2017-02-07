<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHPlayer - Criador de Ficha de Personagem</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Main.css -->
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">PHPlayer - Criador de Ficha de Personagem</h1>
			<form method="post" action="criarPersonagem.php">
				<div class="row">
					<div class="col-md-6">
						<div class="input-group">
							<label for="nome">Nome: </label>
							<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Personagem" required /><br>							
						</div>
						<div class="row">
							<div class="col-md-2">
								<div class="input-group">
									<label for="idade">Idade: </label><br>
									<input type="number" name="idade" id="idade" class="form-control" min="1" max="100" required />
								</div>
							</div>
							<div class="col-md-3 col-md-offset-2">
								<div class="input-group">
									<label for="altura">Altura: </label><br>
									<input type="number" name='altura' id="altura" class="form-control" placeholder="Ex: 1,70" step="any" required />
								</div>
							</div>
							<div class="col-md-3 col-md-offset-2">
								<div class="input-group">
									<label for="peso">Peso: </label><br>
									<input type="number" name="peso" id="peso" class="form-control" placeholder="Ex: 50" required />
								</div>
							</div>
						</div>
						<div class="input-group">
							<fieldset>
								<legend>Sexo do Personagem</legend>
								<input type="radio" name="sexo" id="sexo" value="Masculino" checked /><label for="sexo">Masculino</label><br>
								<input type="radio" name="sexo" id="sexo" value="Feminino" /><label for="sexo">Feminino</label>
							</fieldset><br>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-2">
								<div class="input-group">
									<label for="level">Level:</label><br>
									<input type="number" name="level" id="level" class="form-control" required />
								</div>
							</div>
							<div class="col-md-3 col-md-offset-2">
								<div class="input-group">
									<label for="vida">Pts de Vida: </label><br>
									<input type="number" name="vida" id="vida" class="form-control" required />
								</div>
							</div>
							<div class="col-md-3 col-md-offset-2">
								<div class="input-group">
									<label for="mana">Pts de Mana: </label><br>
									<input type="number" name="mana" id="mana" class="form-control" required />
								</div>		
							</div>					
						</div>
						<div class="input-group">
							<label for="raca">Raça do Personagem: </label>
							<select name="raca" id="raca" class="form-control">
								<option value="Humano">Humano</option>
								<option value="Elf">Elf</option>
								<option value="Dwarf">Dwarf</option>
								<option value="Halfling">Halfling</option>
								<option value="Gnome">Gnome</option>
								<option value="Half-Orc">Half-Orc</option>
							</select><br>
						</div>
						<div class="input-group">
							<label for="classe">Classe do Personagem: </label>
							<select name="classe" id="classe" class="form-control">
								<option value="Fighter">Fighter</option>
								<option value="Wizard">Wizard</option>
								<option value="Cleric">Cleric</option>
								<option value="Rogue">Rogue</option>
								<option value="Ranger">Ranger</option>
							</select><br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="input-group">
							<fieldset>
								<legend>Atributos do Personagem</legend>				
								<label for="forca">Força: </label>
								<input type="number" name="forca" id="forca" class="form-control" min="1" max="20" required><br>
								<label for="constituicao">Constituição: </label>
								<input type="number" name="constituicao" id="constituicao" class="form-control" min="1" max="20" required><br>
								<label for="destreza">Destreza: </label>
								<input type="number" name="destreza" id="destreza" class="form-control" min="1" max="20" required><br>
								<label for="inteligencia">Inteligencia: </label>
								<input type="number" name="inteligencia" id="inteligencia" class="form-control" min="1" max="20" required><br>
								<label for="sabedoria">Sabedoria: </label>
								<input type="number" name="sabedoria" id="sabedoria" class="form-control" min="1" max="20" required><br>
								<label for="carisma">Carisma: </label>
								<input type="number" name="carisma" id="carisma" class="form-control" min="1" max="20" required><br>
								<span class="obs">Você também pode clicar no dado para sortear os valores dos atributos</span>
								<input type="button" id="random" class="pull-right" />
							</fieldset>	
						</div>
					</div>
					<div class="col-md-8 col-md-offset-1">
						<fieldset>
							<legend>Detalhes do Personagem</legend>
							<div class="input-group">
								<label for="equipamento">Equipamento: </label><br>
								<textarea name="equipamento" id="equipamento" class="form-control" placeholder="Digite os items separando por virgula, Ex: Espada,Poção de Vida,Armadura Pesada" rows="5" required></textarea><br>
							</div>
							<div class="input-group">
								<label for="habilidades">Habilidades: </label><br>
								<textarea name="habilidades" id="habilidades" class="form-control" placeholder="Digite as habilidades separando por virgula, Ex: Acrobacia,Exploração,Percepção" rows="5" required></textarea>
							</div>
							<div class="input-group">
								<label for="info">Informações Extras: </label><br>
								<textarea name="info" id="info" class="form-control" placeholder="Digite quaisquer informações extras relacionadas ao personagem" rows="5"></textarea>
							</div>
						</fieldset>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">		
						<div class="input-group">
							<label for="historia">História do Personagem:</label><br>
							<textarea name="historia" id="historia" class="form-control" placeholder="Conte aqui a história do seu personagem e seus objetivos" rows="15" required></textarea><br>
							<input type="submit" class="btn btn-danger btn-lg pull-right" value="Criar">	
						</div>			
					</div>
				</div>
			</form>
		</div>
		


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Main.js -->
		<script src="js/main.js"></script>
	</body>
</html>