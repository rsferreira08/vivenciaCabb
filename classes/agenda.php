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

	public static function pesquisaPorDatas($datas) {
		$databaseObj = DatabaseUtils::startConnection();

		$datasFormatadas = array();

		foreach ($datas as $data) {
			// TBI: Php doesn`t support Map?
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
		// TODO: Refactor to a database query
		$diasValidos = Array('22', '23', '24', '25', '26');
		$horariosValidos = Array('15:00', '13:30', '11:15', '10:00');

		// $dataTemplate = '$dia-10-2018 $hora'; php nao tem suporte pra string template?
		$possiveisDataHora = Array();

		foreach ($diasValidos as $dia) {
			foreach ($horariosValidos as $horario) {
				array_push($possiveisDataHora, $dia.'-10-2018 '.$horario);
			}
		}

		return $possiveisDataHora;
	}
}

?>