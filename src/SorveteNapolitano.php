<?php

namespace Sorvete;

/**
 * Classe para base do sorvete napolitano.
 * 
 * @package Sorvete
 * @author Diego Brocanelli <diegod2@msn.com>
 */
class SorveteNapolitano extends Sorvete
{
	public function __construct()
	{
		$this->setNome('Sorvete Napolitano');
	}

	/**
	 * Retorna a quantidade de bolar se sorvete.
	 * 
	 * @return int 
	 */
	public function getQuantidadeBolas()
	{
		return 0;
	}

	/**
	 * Retorna o preço do sorvete
	 * 
	 * @return  float
	 */
	public function getQuantidadePreco()
	{
		return 2.5;
	}
}