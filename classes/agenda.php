<?php

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
        $databaseObj = new Db(DB_HOST, DB_NAME, DB_USER, DB_PASS);

        // inserre na base
        $retorno = $databaseObj->query("INSERT INTO tb_agendamentos (turma,data,matricula,nome) VALUES (?,?,?,?)",array($this->turma,$this->data,$this->matricula,$this->nome));

        // fecha conexão com o DB
        $databaseObj->CloseConnection();

        return $retorno;
	}

	public static function pesquisaCompromissoPorMatricula($matricula) {
		// Dabatase
        $databaseObj = new Db(DB_HOST, DB_NAME, DB_USER, DB_PASS);

        // inserre na base
        $retorno = $databaseObj->row("SELECT data FROM tb_agendamentos WHERE matricula='$matricula'");

        // fecha conexão com o DB
        $databaseObj->CloseConnection();

        return $retorno;
	}

	public static function pesquisaQuantidadeTurma($data) {
		// Dabatase
        $databaseObj = new Db(DB_HOST, DB_NAME, DB_USER, DB_PASS);

        // inserre na base
        $retorno = $databaseObj->row("SELECT COUNT(*) as 'qtd' FROM tb_agendamentos WHERE data='$data' GROUP BY data");

        // fecha conexão com o DB
        $databaseObj->CloseConnection();

        return $retorno;
	}
	public static function pesquisaPorData($data) {
		// Dabatase
        $databaseObj = new Db(DB_HOST, DB_NAME, DB_USER, DB_PASS);

        // inserre na base
        $retorno = $databaseObj->query("SELECT * FROM tb_agendamentos WHERE data='$data'");

        // fecha conexão com o DB
        $databaseObj->CloseConnection();

        return $retorno;
	}
}

?>