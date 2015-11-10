<?php

namespace Sorvete;

/**
 * Classe base dos sabores do sorvete. 
 * 
 * @package Sorvete
 * @author Diego Brocanelli <diegod2@msn.com>
 */
abstract class SorveteSabor extends Sorvete
{
	public $sorvete;

	/**
	 * Configura o atributo $sorvete e seu nome.
	 * 
	 * @param  Sorvete $sorvete
	 */
	public function __construct(Sorvete $sorvete)
	{
		$this->sorvete = $sorvete;
		$this->setNome($this->getSorvete()->getNome());
	}

	/**
	 * Retorna object Sorvete
	 * 
	 * @return  Sorvete
	 */
	public function getSorvete()
	{
		return $this->sorvete;
	}
}