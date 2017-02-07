$(document).ready(function($) {
	$("#random").click(function() {
		document.getElementById('forca').value = Math.floor(Math.random()* 20 + 1)
		document.getElementById('constituicao').value = Math.floor(Math.random()* 20 + 1)
		document.getElementById('destreza').value = Math.floor(Math.random()* 20 + 1)
		document.getElementById('inteligencia').value = Math.floor(Math.random()* 20 + 1)
		document.getElementById('sabedoria').value = Math.floor(Math.random()* 20 + 1)
		document.getElementById('carisma').value = Math.floor(Math.random()* 20 + 1)
	});
});