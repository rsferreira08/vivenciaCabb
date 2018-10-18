<?php
// carrega arquivo de configuração
require_once('config/config.php');

$turmaArray = Agenda::pesquisaPorData(strtotime('24-10-2018 11:15'));

?>

<div class="event-info"">
	<h1 style="padding: 20px;">Inscritos</h1>
	<div class="row">
		<div class="col-lg-5">
			<?php 
			if ( sizeof($turmaArray) > 3 ) {
				for ( $i=0; $i<=2; $i++ ) { ?>

					<p>Nome: <?=$turmaArray[$i]['nome']?></p>
					<p>Matricula: <?=$turmaArray[$i]['matricula']?></p>
					<hr>

			<?php 
				}
			} else {
				for ( $i=0; $i<sizeof($turmaArray); $i++ ) { ?>

					<p>Nome: <?=$turmaArray[$i]['nome']?></p>
					<p>Matricula: <?=$turmaArray[$i]['matricula']?></p>
					<hr>
			<?php } } ?>
		</div>
		<div class="col-lg-5">
			<?php 
			if ( sizeof($turmaArray) > 3 ) {
				for ( $i=3; $i<sizeof($turmaArray); $i++ ) { ?>

					<p>Nome: <?=$turmaArray[$i]['nome']?></p>
					<p>Matricula: <?=$turmaArray[$i]['matricula']?></p>
					<hr>
				
			<?php } } ?>
		</div>
	</div>
</div>

<?php ?>