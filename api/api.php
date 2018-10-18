<?php
// carrega arquivo de configuração
require_once('../config/config.php');

// Define JSON para return
header('Content-Type: application/json');

// Verifica se o request veio via ajax
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

	// Inicia as variáveis 
    $retorno_status = 'ERROR';
    $retorno_mensagem = '';
    $retorno_data = array();
    $aux_checkerrors = false;

	// Verifica o método da requisição
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Limpa possíveis espaços em branco no início e fim dos parâmetros.
		$req_parametros = array_map('trim', $_POST);

		// Verifica qual ação será executada
		switch ($_POST['acao']) {
			case 'agendarHorario':
				if (empty($req_parametros['nome'])) {
					$retorno_mensagem[] = 'Favor preencher seu nome';
				}
				if (empty($req_parametros['matricula'])) {
					$retorno_mensagem[] = 'Favor preencher sua matrícula';
				} 
				if ( !preg_match('/^[Ff][0-9]{7}$/', $req_parametros['matricula'])) {
					$retorno_mensagem[] = "A matrícula precisa ser no formato FXXXXXXX e sem o digito";
				}
				if (empty($req_parametros['dia'])) {
					$retorno_mensagem[] = 'Favor selecione um dia para a vivência';
				}
				if (empty($req_parametros['turma'])) {
					$retorno_mensagem[] = 'Selecione por favor um dos horários disponíveis';
				}
				if (empty($req_parametros['horario'])) {
					$retorno_mensagem[] = 'Selecione por favor um dos horários disponíveis';
				}
				$horario = $req_parametros['dia'] . ' ' . $req_parametros['horario'];

				$compromisso = Agenda::pesquisaCompromissoPorMatricula($req_parametros['matricula']);
				$quantidadeMaximaTurma = Agenda::pesquisaQuantidadeTurma(strtotime($horario));

				if ( $quantidadeMaximaTurma['qtd'] >= 6 ) {
					$retorno_mensagem[] = "Essa turma já está cheia, selecione outro dia/horário";
				} else if ( $compromisso > 0 ) {
					$retorno_mensagem[] = "Voce já tem um agendamento para " . date('d/m/Y h:i',$compromisso['data']);
				} else if ( strtotime($horario) < strtotime(date('d-m-Y',strtotime('now')))+86400 ) {
					$retorno_mensagem[] = 'Seu agendamento precisa ser em D+1';
				}

				if ( empty($retorno_mensagem) ) {
					$agendaObj = new Agenda;
					$agendaObj->setTurma($req_parametros['turma']);
					$agendaObj->setData(strtotime($horario));
					$agendaObj->setMatricula($req_parametros['matricula']);
					$agendaObj->setNome($req_parametros['nome']);
					
					try {
						if ( $agendaObj->adicionaCompromisso() ) {
							$retorno_status = "OK";
							$retorno_mensagem = "Horário agendado com sucesso";
						} else {
							$retorno_mensagem[] = "Erro ao agendar seu horário, favor contactar o administrador.";
						}
					} catch (Exception $e) {
						$retorno_mensagem = "".$e->getMessage();
					}
				} else {
					$retorno_mensagem = implode('<br>', $retorno_mensagem);
				}
				break;

		}
	} else {
	}

	echo json_encode(array(
        'status' => $retorno_status,
        'mensagem' => $retorno_mensagem,
        'ret_data' => $retorno_data,
        ));
    exit;
}
?>