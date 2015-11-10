<?php

namespace Sorvete;

abstract class Sorvete
{
	private $nome;

	abstract function getQuantidadeBolas();
	abstract function getQuantidadePreco();

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}
}