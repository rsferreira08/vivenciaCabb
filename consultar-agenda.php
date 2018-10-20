<?php
// carrega arquivo de configuração
require_once('config/config.php');

$dataHora = str_replace('--', ' ', $_GET['data']);

$possiveisDataHora = Agenda::getDatasValidas();

$isValid = in_array($dataHora, $possiveisDataHora);

if (!$isValid) {
	// TODO: Exception Logic.
	// TBI: Throw exception or redirect to index?
	echo 'Invalid datetime';
	die();
}

$turmaArray = Agenda::pesquisaPorData(strtotime($dataHora));
?>

<div class="event-info""> 
    <h1 style="padding: 20px;">Inscritos</h1> 
    <div class="row"> 
        <div class="col-lg-6"> 
            <?php  
            if ( sizeof($turmaArray) > 3 ) { 
                for ( $i=0; $i<=2; $i++ ) { ?> 
                    <div class="mr-3" style="float: left"> 
                        <img alt="<?=strtoupper($turmaArray[$i]['matricula'])?>" src="https://humanograma.intranet.bb.com.br/avatar/<?=strtoupper($turmaArray[$i]['matricula'])?>" class="rounded-circle mt-2" width="50px;"> 
                    </div> 
                    <p>Nome: <?=$turmaArray[$i]['nome']?></p> 
                    <p>Matricula: <?=$turmaArray[$i]['matricula']?></p> 
                    <hr> 
 
            <?php  
                } 
            } else { 
                for ( $i=0; $i<sizeof($turmaArray); $i++ ) { ?> 
                    <div class="mr-3" style="float: left"> 
                        <img alt="<?=strtoupper($turmaArray[$i]['matricula'])?>" src="https://humanograma.intranet.bb.com.br/avatar/<?=strtoupper($turmaArray[$i]['matricula'])?>" class="rounded-circle mt-2" width="50px;"> 
                    </div> 
                    <p>Nome: <?=$turmaArray[$i]['nome']?></p> 
                    <p>Matricula: <?=$turmaArray[$i]['matricula']?></p> 
                    <hr> 
            <?php } } ?> 
        </div> 
        <div class="col-lg-6"> 
            <?php  
            if ( sizeof($turmaArray) > 3 ) { 
                for ( $i=3; $i<sizeof($turmaArray); $i++ ) { ?> 
                    <div class="mr-3" style="float: left"> 
                        <img alt="<?=strtoupper($turmaArray[$i]['matricula'])?>" src="https://humanograma.intranet.bb.com.br/avatar/<?=strtoupper($turmaArray[$i]['matricula'])?>" class="rounded-circle mt-2" width="50px;"> 
                    </div> 
                    <p>Nome: <?=$turmaArray[$i]['nome']?></p> 
                    <p>Matricula: <?=$turmaArray[$i]['matricula']?></p> 
                    <hr> 
                 
            <?php } } ?> 
        </div> 
    </div> 
</div>