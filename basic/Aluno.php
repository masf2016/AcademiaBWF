<?php

class Aluno
{
	private $id_aluno;
	private $nome_aluno;
	private $cpf_aluno;
	private $rg_aluno;
	
	private $id_academia;
	private $id_usuario;
	
	
	public function getIdAluno() {
		return $this->id_aluno;
	}
	public function setIdAluno($id_aluno) {
		$this->id_aluno = $id_aluno;
		return $this;
	}
	public function getNomeAluno() {
		return $this->nome_aluno;
	}
	public function setNomeAluno($nome_aluno) {
		$this->nome_aluno = $nome_aluno;
		return $this;
	}
	public function getCpfAluno() {
		return $this->cpf_aluno;
	}
	public function setCpfAluno($cpf_aluno) {
		$this->cpf_aluno = $cpf_aluno;
		return $this;
	}
	public function getRgAluno() {
		return $this->rg_aluno;
	}
	public function setRgAluno($rg_aluno) {
		$this->rg_aluno = $rg_aluno;
		return $this;
	}
	
	
	
	public function getIdAcademia() {
		return $this->id_academia;
	}
	public function setIdAcademia($id_academia) {
		$this->id_academia = $id_academia;
		return $this;
	}
	public function getIdUsuario() {
		return $this->id_usuario;
	}
	public function setIdUsuario($id_usuario) {
		$this->id_usuario = $id_usuario;
		return $this;
	}
	
	
	
	
}