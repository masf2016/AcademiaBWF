<?php

class Treino
{
	
	private $id_treino;
	private $nome_treino;
	private $descr_treino;
	
	private $id_secret;
	private $id_aluno;
	private $id_professor;
	
	
	public function getIdTreino() {
		return $this->id_treino;
	}
	public function setIdTreino($id_treino) {
		$this->id_treino = $id_treino;
		return $this;
	}
	public function getNomeTreino() {
		return $this->nome_treino;
	}
	public function setNomeTreino($nome_treino) {
		$this->nome_treino = $nome_treino;
		return $this;
	}
	public function getDescrTreino() {
		return $this->descr_treino;
	}
	public function setDescrTreino($descr_treino) {
		$this->descr_treino = $descr_treino;
		return $this;
	}
	
	
	public function getIdSecret() {
		return $this->id_secret;
	}
	public function setIdSecret($id_secret) {
		$this->id_secret = $id_secret;
		return $this;
	}
	public function getIdAluno() {
		return $this->id_aluno;
	}
	public function setIdAluno($id_aluno) {
		$this->id_aluno = $id_aluno;
		return $this;
	}
	public function getIdProfessor() {
		return $this->id_professor;
	}
	public function setIdProfessor($id_professor) {
		$this->id_professor = $id_professor;
		return $this;
	}
	
	
	
}