<?php
// carrega arquivo de configuração
require_once('config/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>UNC - Vivência no Contact Center</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/base.css">
	<link rel="stylesheet" type="text/css" href="assets/css/calendario2.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> <!-- fonte para a pagina -->
	<style type="text/css">
		ol, ul {
			list-style: none;
		}
		blockquote, q {
			quotes: none;
		}
		blockquote:before, blockquote:after,
		q:before, q:after {
			content: '';
			content: none;
		}
		table {
			border-collapse: collapse;
			border-spacing: 0;
		}
	</style>
</head>
<body  data-spy="scroll" data-target="#navbar-main" data-offset="90">

	<!-- navbar -->
	<?php 
	require('components/navbar.php');
	?>
 	<!-- fim navbar -->

 	<!-- fundo -->
 	<?php
	require('components/homeBackground.php');
	?>
	<!-- fim fundo -->

	<!-- O que e -->
	<?php
	require('components/oQueE.php');
	?>
	<!-- fim O que e -->

	<!-- Roteiro -->
	<?php
	require('components/roteiro.php');
	?>
	<!-- fim Roteiro -->

	<!-- inscricoes -->
	<?php
	require('components/inscricoes.php');
	?>
	<!-- inscricoes -->

	<!-- footer -->
	<footer class="py-4 mt-4 text-center">
		<p class="m-0" style="color: #fff; line-height: 40px;">Desenvolvido pela UNC</p>
	</footer>
	<!-- fim footer -->

 	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/calendario/modernizr.min.js"></script>
	<script src="assets/js/calendario/main.js"></script>
	<script type="text/javascript">
		$('a[href^="#"]').click(function () {
			$('html,body').animate({scrollTop: $(this.hash).offset().top - 70}, 300);
		});

		$(window).scroll(function() {
			$('nav').toggleClass('scrolled shadow-lg', $(this).scrollTop() > 100);
		});

		$('#botaoConfirmaAgendamento').on('click', function(event) {
			event.preventDefault();
			var v_nome = $('#nome').val();
			var v_matricula = $('#matricula').val();
			var v_dia = $('#dia option:selected').val();
			var v_horario = $('#turma option:selected').attr('horario');
			var v_turma = $('#turma option:selected').val();

			// salva botao inicial
			var o_btn = $('#botaoConfirmaAgendamento');
			var o_label = $('#botaoConfirmaAgendamento').html();
			o_btn.attr('disabled', 'disabled').html('Aguarde...');

			$.post('api/api.php', {
				acao: 'agendarHorario',
				nome: v_nome,
				matricula: v_matricula,
				dia: v_dia,
				horario: v_horario,
				turma: v_turma
			},
			function(data) {
				if (data.status === "OK") {
					// mostra mensagem  de retorno
					$('#resultMessage').show();
					$('#resultMessage').removeClass('alert-danger');
					$('#resultMessage').addClass('alert-success').html(data.mensagem);
					location.reload();
				} else {
					$('#resultMessage').show();
					$('#resultMessage').removeClass('alert-success');
					$('#resultMessage').addClass('alert-danger').html(data.mensagem);
				}
				// Restaura o botão
				o_btn.removeAttr('disabled').html(o_label);
			}, 'json');
		});
	</script>
	
</body>
</html>