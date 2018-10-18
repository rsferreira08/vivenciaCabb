<?php
// carrega arquivo de configuração
require_once('config/config.php');

// dia 22
$dia22turma1 = Agenda::pesquisaPorData(strtotime('22-10-2018 10:00'));
$dia22turma2 = Agenda::pesquisaPorData(strtotime('22-10-2018 11:15'));
$dia22turma3 = Agenda::pesquisaPorData(strtotime('22-10-2018 13:30'));
$dia22turma4 = Agenda::pesquisaPorData(strtotime('22-10-2018 15:00'));

// dia 23
$dia23turma1 = Agenda::pesquisaPorData(strtotime('23-10-2018 10:00'));
$dia23turma2 = Agenda::pesquisaPorData(strtotime('23-10-2018 11:15'));
$dia23turma3 = Agenda::pesquisaPorData(strtotime('23-10-2018 13:30'));
$dia23turma4 = Agenda::pesquisaPorData(strtotime('23-10-2018 15:00'));

// dia 24
$dia24turma1 = Agenda::pesquisaPorData(strtotime('24-10-2018 10:00'));
$dia24turma2 = Agenda::pesquisaPorData(strtotime('24-10-2018 11:15'));
$dia24turma3 = Agenda::pesquisaPorData(strtotime('24-10-2018 13:30'));
$dia24turma4 = Agenda::pesquisaPorData(strtotime('24-10-2018 15:00'));

// dia 25
$dia25turma1 = Agenda::pesquisaPorData(strtotime('25-10-2018 10:00'));
$dia25turma2 = Agenda::pesquisaPorData(strtotime('25-10-2018 11:15'));
$dia25turma3 = Agenda::pesquisaPorData(strtotime('25-10-2018 13:30'));
$dia25turma4 = Agenda::pesquisaPorData(strtotime('25-10-2018 15:00'));

// dia 26
$dia26turma1 = Agenda::pesquisaPorData(strtotime('26-10-2018 10:00'));
$dia26turma2 = Agenda::pesquisaPorData(strtotime('26-10-2018 11:15'));
$dia26turma3 = Agenda::pesquisaPorData(strtotime('26-10-2018 13:30'));
$dia26turma4 = Agenda::pesquisaPorData(strtotime('26-10-2018 15:00'));
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
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar-main">
	    <div class="container">
		    <a class="navbar-brand" href="#">
				UNC
		    </a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<i class="fas fa-bars"></i>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav ml-auto">
		    		<li class="nav-item">
		    			<a class="nav-link" href="#home">Home</a>
		    		</li>
		    		<li class="nav-item">
		    			<a class="nav-link" href="#guiaInicial">O que é</a>
		    		</li>
		    		<li class="nav-item">
		    			<a class="nav-link" href="#roteiro">Roteiro de Acesso</a>
		    		</li>
		    		<li class="nav-item">
		    			<a class="nav-link" href="#inscricoes">Inscrições</a>
		    		</li>
		    	</ul>
		    </div>
	    </div>
 	</nav>
 	<!-- fim navbar -->

 	<!-- fundo -->
 	<header class="home-background" id="home">
 		<div class="container h-100">
      		<div class="row h-100 align-items-center">
        		<div class="col text-center">
          			<div style="font-size: 3rem; color: #fff">Bem-vindo! Aqui começa sua experiência na Vivência no Contact Center</div>
          			
        		</div>
      		</div>
    	</div>
	    <div class="home-scroll">
	    	<a href="#guiaInicial" class="home-scroll-btn">
	    		<i class="fas fa-angle-down"></i>
	   		</a>
	    </div>
  	</header>
  	<!-- fim fundo -->

  	<section class="mt-6 mb-3" id="guiaInicial">
	  	<div class="container">
	  		<div class="row mb-3">
	  			<div class="col">
					<p class="text-center display-5">O QUE É?</p>	
				</div>
			</div>
	  		<div class="row mt-5">
	  			<div class="offset-lg-2 col-lg-3 text-center">
	  				<span class="display-4">CRBB</span>
	  				<div>
	  					<p  class="text-justify mt-5">
	  						Nosso nome nos define! É na Central de Relacionamento do Banco do Brasil onde nossos clientes são atendidos por profissionais qualificados e prontos a ajudar.
	  					</p>
	  					<p  class="text-justify">
	  						Queremos te convidar para viver a experiência de atuar na CRBB e te permitir conhecer, na prática, a jornada de atendimento do nosso contact center.
	  					</p>
	  				</div>
	  			</div>
	  			<div class="offset-lg-2 col-lg-3 text-center">
	  				<img style="width: 130px;" class="col" src="assets/img/logo.png">
	  				<div>
	  					<p class="text-justify mt-3">
	  						Nesse período você poderá experimentar como é realmente estar do outro lado da linha atendendo, ajudando e fazendo negócios com nossos clientes, como se fosse um atendendo da CRBB.
	  					</p>
	  				</div>
	  			</div>
	  		</div>
	  		<div class="row mt-3">
	  			<div class="col">
		  			<div class="jumbotron text-center" style="background-color: rgba(255, 214, 75,0.6) !important;">
		  				<p class="lead" style="font-size: 40px !important;">&ldquo;Venha viver uma nova experiência&rdquo;</p>
		  			</div>
		  		</div>
	  		</div>
	  	</div>
	</section>

	<section class="mt-6 mb-5" id="roteiro"> 
		<div class="container">
			<div class="row">
				<div class="col">
					<p class="text-center display-5">ROTEIRO DE ACESSO</p>	
				</div>	
			</div>
	  		<div class="row mt-5 align-items-center">
	  			<div class="col-lg-4 text-center img-guia">
	  				<i class="fas fa-5x fa-chalkboard-teacher"></i>
	  			</div>
	  			<div class="col-lg-8 text-justify">
	  				<p>
	  					Você irá prestar atendimento ao cliente. Mas calma! Antes você vai receber treinamento, ouvir ligações gravadas e acompanhar um atendimento em tempo real.
	  				</p>
	  			</div>
	  		</div>
	  		<hr>
	  		<div class="row align-items-center">
	  			<div class="col-lg-8 text-justify">
	  				<p>
	  					Para a atuação na vivência, peça antecipadamente ao seu gerente, acesso a transação CALL A028 (SisBB), para acessar a aplicação da CRBB.
	  				</p>
	  			</div>
	  			<div class="col-lg-4 text-center img-guia">
	  				<i class="fas fa-5x fa-headset"></i>
	  			</div>
	  		</div>
	  		<hr>
	  		<div class="row align-items-center">
	  			<div class="col-lg-4 text-center img-guia">
	  				<i class="fas fa-5x fa-info-circle"></i>
	  			</div>
	  			<div class="col-lg-8 text-justify">
	  				<p>
	  					<ul>
	  						<li>A duração da Vivência é de 1 hora e contará como hora de treinamento presencial (código 271)</li>
	  						<li>Chegue 10 minutos antes do horário de início.</li>
	  						<li>Não há necessidade de trazer material extra.</li>
	  					</ul>
	  				</p>
	  			</div>
	  		</div>
	  	</div>
	</section>

	<section class="mt-6 mb-3" id="inscricoes">
		<div class="container">
			<div class="row">
				<div class="col">
					<p class="text-center display-5">INSCRIÇÕES</p>	
				</div>
			</div>
			<!--<div class="row">
				<p class="mt-3">&bull; Selecione o melhor dia e horário para você ter essa experiência</p> 
			</div>-->
			<div class="row">
				<div class="offset-lg-3 col-lg-7">
					<form  class="form-inline">
						<label class="my-1 mr-2" for="dia">Selecione o dia</label>
						<select class="custom-select my-1 mr-sm-2" id="dia" required>
						    <option value="">Selecione...</option>
						    <option value="18-10-2018">18/10</option>
						    <option value="22-10-2018">22/10</option>
						    <option value="23-10-2018">23/10</option>
						    <option value="24-10-2018">24/10</option>
						    <option value="25-10-2018">25/10</option>
						    <option value="26-10-2018">26/10</option>
						</select>	

						<label class="my-1 mr-2" for="hora">e a hora</label>
						<select class="custom-select my-1 mr-sm-2" id="turma" required> 
						    <option>Selecione...</option>
						    <option value="1" horario="10:00">10:00h</option>
						    <option value="2" horario="11:15">11:15h</option>
						    <option value="3" horario="13:30">13:30h</option>
						    <option value="4" horario="15:00">15:00h</option>
						</select>

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgendamento">Agendar</button>					
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col mt-3">
					<h5 class="text-center">Obs.: Quantidade máxima de pessoas por turma [6]</h5>
				</div>
			</div>

			<!-- modal agendamento -->
			<div class="modal fade" id="modalAgendamento" tabindex="-1" role="dialog" aria-labelledby="tituloModalAgendamento" aria-hidden="true">
			  	<div class="modal-dialog" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="tituloModalAgendamento">Agendamento</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div id="resultMessage" class="alert text-center" style="display: none;"></div>
				      		<div class="form-group">
	    						<label for="nome">Digite seu nome</label>
	    						<input type="text" class="form-control" id="nome">
	    					</div>
	  						<div class="form-group">
		    					<label for="matricula">Matrícula</label>
		    					<input type="text" class="form-control" id="matricula" aria-describedby="matriculaHelp">
		    					<small id="matriculaHelp" class="form-text text-muted">Digite sua matricula no formato FXXXXXXX</small>
	  						</div>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			        		<button type="button" class="btn btn-primary" id="botaoConfirmaAgendamento">Agendar</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- fim modal -->
			<div class="row" id="calendario">
				<div class="col-lg-12">
					<div class="cd-schedule loading">
						<div class="timeline">
							<ul>
								<li><span>09:00</span></li>
								<li><span>09:30</span></li>
								<li><span>10:00</span></li>
								<li><span>10:30</span></li>
								<li><span>11:00</span></li>
								<li><span>11:30</span></li>
								<li><span>12:00</span></li>
								<li><span>12:30</span></li>
								<li><span>13:00</span></li>
								<li><span>13:30</span></li>
								<li><span>14:00</span></li>
								<li><span>14:30</span></li>
								<li><span>15:00</span></li>
								<li><span>15:30</span></li>
								<li><span>16:00</span></li>
								<li><span>16:30</span></li>
								<li><span>17:00</span></li>
								<li><span>17:30</span></li>
								<li><span>18:00</span></li>
							</ul>
						</div> <!-- .timeline -->

						<div class="events">
							<ul>
								<li class="events-group">
									<div class="top-info"><span>22/10</span></div>

									<ul>
										<li class="single-event" data-start="10:00" data-end="11:00" data-content="dia-22-turma-1" data-event="event-1">
											<a href="#0">
												<em class="event-name mt-3">
													<?php foreach ( $dia22turma1 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="11:15" data-end="12:15" data-content="dia-22-turma-2" data-event="event-2">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia22turma2 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="13:30" data-end="14:30"  data-content="dia-22-turma-3" data-event="event-3">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia22turma3 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="15:00" data-end="16:00"  data-content="dia-22-turma-4" data-event="event-4">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia22turma4 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>
									</ul>
								</li>

								<li class="events-group">
									<div class="top-info"><span>23/10</span></div>

									<ul>
										<li class="single-event" data-start="10:00" data-end="11:00" data-content="dia-23-turma-1" data-event="event-1">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia23turma1 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="11:15" data-end="12:15" data-content="dia-23-turma-3" data-event="event-2">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia23turma2 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="13:30" data-end="14:30"  data-content="dia-23-turma-3" data-event="event-3">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia23turma3 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="15:00" data-end="16:00"  data-content="dia-23-turma-4" data-event="event-4">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia23turma4 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>
									</ul>
								</li>

								<li class="events-group">
									<div class="top-info"><span>24/10</span></div>

									<ul>
										<li class="single-event" data-start="10:00" data-end="11:00" data-content="dia-24-turma-1" data-event="event-1">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia24turma1 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="11:15" data-end="12:15" data-content="dia-24-turma-2" data-event="event-2">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia24turma2 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="13:30" data-end="14:30"  data-content="dia-24-turma-3" data-event="event-3">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia24turma3 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="15:00" data-end="16:00"  data-content="dia-24-turma-4" data-event="event-4">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia24turma4 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>
									</ul>
								</li>

								<li class="events-group">
									<div class="top-info"><span>25/10</span></div>

									<ul>
										<li class="single-event" data-start="10:00" data-end="11:00" data-content="dia-25-turma-1" data-event="event-1">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia25turma1 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="11:15" data-end="12:15" data-content="dia-25-turma-2" data-event="event-2">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia25turma2 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="13:30" data-end="14:30"  data-content="dia-25-turma-3" data-event="event-3">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia25turma3 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="15:00" data-end="16:00"  data-content="dia-25-turma-4" data-event="event-4">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia25turma4 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>
									</ul>
								</li>

								<li class="events-group">
									<div class="top-info"><span>26/10</span></div>

									<ul>
										<li class="single-event" data-start="10:00" data-end="11:00" data-content="dia-26-turma-1" data-event="event-1">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia26turma1 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="11:15" data-end="12:15" data-content="dia-26-turma-2" data-event="event-2">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia26turma2 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="13:30" data-end="14:30"  data-content="dia-26-turma-3" data-event="event-3">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia26turma3 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>

										<li class="single-event" data-start="15:00" data-end="16:00"  data-content="dia-26-turma-4" data-event="event-4">
											<a href="#0">
												<em class="event-name">
													<?php foreach ( $dia26turma4 as $turma ) { ?>
													<img alt="<?=$turma['matricula']?>" src="assets/img/avatar.png" class="rounded-circle" width="20px;">
													<?php } ?>
												</em>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>

						<div class="event-modal">
							<header class="header">
								<div class="content">
									<span class="event-date"></span>
									<h3 class="event-name"></h3>
								</div>

								<div class="header-bg"></div>
							</header>

							<div class="body">
								<div class="event-info"></div>
								<div class="body-bg"></div>
							</div>

							<a href="#0" class="close">Close</a>
						</div>

						<div class="cover-layer"></div>
				</div>
			</div>
		</div>
	</section>

	<footer class="py-4 mt-4 text-center">
		<p class="m-0" style="color: #fff; line-height: 40px;">Desenvolvido pela UNC</p>
	</footer>

 	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/calendario/modernizr.min.js"></script>
	<script src="assets/js/calendario/main.js"></script>
	<script type="text/javascript">
		$('a[href^="#"]').click(function () {
	        $('html,body').animate({scrollTop: $(this.hash).offset().top - 70}, 300);
	    });
		$(window).scroll(function(){
			$('nav').toggleClass('scrolled shadow-lg', $(this).scrollTop() > 100);
		});
		$('#botaoConfirmaAgendamento').on('click',function(event){
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

			$.post('api/api.php',{
				acao: 'agendarHorario',
				nome: v_nome,
				matricula: v_matricula,
				dia: v_dia,
				horario: v_horario,
				turma: v_turma
			}, function(data){
				if ( data.status == "OK" ) {
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