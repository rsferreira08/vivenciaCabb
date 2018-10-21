<?php

require_once dirname(__FILE__) . "/database/databaseUtils.php";

class Agenda {
	// variaveis
	private $id;
	private $turma;
	private $data;
	private $matricula;
	private $nome;

	//gets
	public function getId() { return $this->id; }
	public function getTurma() { return $this->turma; }
	public function getData() { return $this->data; }
	public function getMatricula() { return $this->matricula; }
	public function getNome() { return $this->nome; }

	//sets
	public function setId($id) { $this->id = $id; }
	public function setTurma($turma) { $this->turma = $turma; }
	public function setData($data) { $this->data = $data; }
	public function setMatricula($matricula) { $this->matricula = $matricula; }
	public function setNome($nome) { $this->nome = $nome; }

	//funcoes

	public function adicionaCompromisso() {
		// Dabatase
		$databaseObj = DatabaseUtils::startConnection();

		// inserre na base
		$retorno = $databaseObj->query("INSERT INTO tb_agendamentos (turma,data,matricula,nome) VALUES (?,?,?,?)",array($this->turma,$this->data,$this->matricula,$this->nome));

		// fecha conexão com o DB
		DatabaseUtils::finishConnection($databaseObj);

		return $retorno;
	}

	public static function pesquisaCompromissoPorMatricula($matricula) {
		// Dabatase
		$databaseObj = DatabaseUtils::startConnection();

		// inserre na base
		$retorno = $databaseObj->row("SELECT data FROM tb_agendamentos WHERE matricula='$matricula'");

		// fecha conexão com o DB
		DatabaseUtils::finishConnection($databaseObj);

		return $retorno;
	}

	public static function pesquisaQuantidadeTurma($data) {
		// Dabatase
		$databaseObj = DatabaseUtils::startConnection();

		// inserre na base
		$retorno = $databaseObj->row("SELECT COUNT(*) as 'qtd' FROM tb_agendamentos WHERE data='$data' GROUP BY data");

		// fecha conexão com o DB
		DatabaseUtils::finishConnection($databaseObj);

		return $retorno;
	}
	public static function pesquisaPorData($data) {
		// Dabatase
		$databaseObj = DatabaseUtils::startConnection();

		// inserre na base
		$retorno = $databaseObj->query("SELECT * FROM tb_agendamentos WHERE data='$data'");

		// fecha conexão com o DB
		DatabaseUtils::finishConnection($databaseObj);

		return $retorno;
	}

	public static function pesquisaTodosCompromissos() {
		$datasValidas = self::getDatasValidas();
		return self::pesquisaPorDatas($datasValidas);
	}

	public static function formataCompromissosPorEvento($compromissos) {
		$retorno = Array();

		foreach($compromissos as $compromisso) {
			$dataFormatada = date('j-n-Y G:i', $compromisso['data']);
			if ($retorno[$dataFormatada] == NULL) {
				$retorno[$dataFormatada] = Array();
			}

			array_push($retorno[$dataFormatada], $compromisso);
		}

		return $retorno;
	}
	
	public static function pesquisaPorDatas($datas) {
		$databaseObj = DatabaseUtils::startConnection();

		$datasFormatadas = array();

		foreach ($datas as $data) {
			$datasFormatadas[strtotime($data)] = $data;
		}

		$linhas = $databaseObj->query("SELECT * FROM tb_agendamentos");
		$retorno = array();

		foreach ($linhas as $linha) {
			if ($datasFormatadas[$linha['data']] != NULL) {
				array_push($retorno, $linha);
			}
		}

		DatabaseUtils::finishConnection($databaseObj);
		return $retorno;
	}

	public static function getDatasValidas() {
		// Note date is always without leading 0. USE 1-2 and DO NOT 01-02!
		$diasValidosPorMesAno = Array(
			'10-2018' => Array(
				'start' => 22,
				'finish' => 31,
				'notInclude' => Array()
			),
			'11-2018' => Array(
				'start' => 1,
				'finish' => 30,
				'notInclude' => Array()
			),
			'12-2018' => Array(
				'start' => 1,
				'finish' => 31,
				'notInclude' => Array(5)
			),
		);

		// 0 = Domingo, 6 = Sabado
		$naoIncluirDiasDaSemana = array(0, 6);

		// Hours without leading zero
		// Minutes with leading zero
		$horariosValidos = Array('15:00', '13:30', '11:15', '10:00');
		$possiveisDataHora = Array();

		foreach ($diasValidosPorMesAno as $mesAno => $mesAnoData) {
			for ($dia = $mesAnoData['start']; $dia <= $mesAnoData['finish']; $dia++) {
				if (in_array($dia, $mesAnoData['notInclude'])) {
					continue;
				}
				
				foreach ($horariosValidos as $horario) {
					$dataFormatada = $dia.'-'.$mesAno.' '.$horario;
					$diaDaSemana = date('w', strtotime($dataFormatada));
					if (in_array($diaDaSemana, $naoIncluirDiasDaSemana)) {
						continue;
					}

					array_push($possiveisDataHora, $dataFormatada);
				}
			}
		}

		return $possiveisDataHora;
	}

	public static function getDatasPorDateCode($dateCode, $cache = NULL) {
		$datas = $cache != null ? $cache : self::getDatasValidas();
		$retorno = Array();

		foreach ($datas as $data) {
			$diaDaSemana = date($dateCode, strtotime($data));
			if ($retorno[$diaDaSemana] == NULL) {
				$retorno[$diaDaSemana] = Array();
			}
			
			array_push($retorno[$diaDaSemana], $data);
		}

		return $retorno;
	}

	public static function getSegundasValidas($cache = NULL) {
		$datas = $cache != null ? $cache : self::getDatasPorDateCode('w');
		$eventosNaSegunda = $datas['1'];
		$retorno = Array();
		
		foreach ($eventosNaSegunda as $evento) {
			$dataFormatada = date('z', strtotime($evento));
			if (!in_array($dataFormatada, $retorno)) {
				$retorno[$dataFormatada] = $evento;
			}
		}

		return $retorno;
	}
}

?>