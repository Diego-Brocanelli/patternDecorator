<?php

namespace Sorvete;

/**
 * Classe para incremento de morango ao sorvete. 
 * 
 * @package Sorvete
 * @author Diego Brocanelli <diegod2@msn.com>
 */
class Morango extends SorveteSabor
{
	/**
	 * @param \Sorvete\Sorvete $sorvete
	 */
	public function __construct(Sorvete $sorvete)
	{
		parent::__construct($sorvete);
	}

	/**
	 * Retorna quantidade de bolas do sorvete.
	 * 
	 * @return int
	 */
	public function getQuantidadeBolas()
	{
		return 1 + $this->getSorvete()->getQuantidadeBolas();
	}

	/**
	 * Retorna o preço do sorvete.
	 * 
	 * @return float
	 */
	public function getQuantidadePreco()
	{
		return 1.75 + $this->getSorvete()->getQuantidadePreco();
	}
}