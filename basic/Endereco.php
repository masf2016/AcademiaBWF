<?php

class Endereco
{
	
	private $id_end;
	private $rua_end;
	private $numero_end;
	private $complemento_end;
	private $bairro_end;
	private $cidade_end;
	
	
	
	public function getIdEnd() {
		return $this->id_end;
	}
	public function setIdEnd($id_end) {
		$this->id_end = $id_end;
		return $this;
	}
	public function getRuaEnd() {
		return $this->rua_end;
	}
	public function setRuaEnd($rua_end) {
		$this->rua_end = $rua_end;
		return $this;
	}
	public function getNumeroEnd() {
		return $this->numero_end;
	}
	public function setNumeroEnd($numero_end) {
		$this->numero_end = $numero_end;
		return $this;
	}
	public function getComplementoEnd() {
		return $this->complemento_end;
	}
	public function setComplementoEnd($complemento_end) {
		$this->complemento_end = $complemento_end;
		return $this;
	}
	public function getBairroEnd() {
		return $this->bairro_end;
	}
	public function setBairroEnd($bairro_end) {
		$this->bairro_end = $bairro_end;
		return $this;
	}
	public function getCidadeEnd() {
		return $this->cidade_end;
	}
	public function setCidadeEnd($cidade_end) {
		$this->cidade_end = $cidade_end;
		return $this;
	}
	
	
	
	
}