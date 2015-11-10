<?php

namespace Sorvete;

interface SorveteInterface
{
	/**
	 * Retorna a quantidade de bolar se sorvete.
	 * 
	 * @return int 
	 */
	function getQuantidadeBolas();

	/**
	 * Retorna o preço do sorvete
	 * 
	 * @return  float
	 */
	function getQuantidadePreco();

	/**
	 * Insere o nome do sorvete
	 * 
	 * @param string $nome 
	 */
	public function setNome($nome);

	/**
	 * Retorna no nome do sorvete
	 * 
	 * @return string
	 */
	public function getNome();
}