<?php

class Avaliacao_fis
{
	
	private $id_avaliacao;
	private $nome_avaliacao;
	private $descri_avaliacao;
	
	private $id_avaliador;
	private $id_secret;
	
	
	public function getIdAvaliacao() {
		return $this->id_avaliacao;
	}
	public function setIdAvaliacao($id_avaliacao) {
		$this->id_avaliacao = $id_avaliacao;
		return $this;
	}
	public function getNomeAvaliacao() {
		return $this->nome_avaliacao;
	}
	public function setNomeAvaliacao($nome_avaliacao) {
		$this->nome_avaliacao = $nome_avaliacao;
		return $this;
	}
	public function getDescriAvaliacao() {
		return $this->descri_avaliacao;
	}
	public function setDescriAvaliacao($descri_avaliacao) {
		$this->descri_avaliacao = $descri_avaliacao;
		return $this;
	}
	
	
	public function getIdAvaliador() {
		return $this->id_avaliador;
	}
	public function setIdAvaliador($id_avaliador) {
		$this->id_avaliador = $id_avaliador;
		return $this;
	}
	public function getIdSecret() {
		return $this->id_secret;
	}
	public function setIdSecret($id_secret) {
		$this->id_secret = $id_secret;
		return $this;
	}
	
	
	
}