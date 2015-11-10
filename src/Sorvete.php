<?php

namespace Sorvete;

/**
 * Classe pbase para o sorvete.
 * 
 * @package Sorvete
 * @author Diego Brocanelli <diegod2@msn.com>
 */
abstract class Sorvete
{
	private $nome;

	abstract function getQuantidadeBolas();
	abstract function getQuantidadePreco();

	/**
	 * Insere o nome do sorvete
	 * 
	 * @param string $nome 
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	/**
	 * Retorna no nome do sorvete
	 * 
	 * @return string
	 */
	public function getNome()
	{
		return $this->nome;
	}
}