<?php

namespace Sorvete;

abstract class SorveteSabor extends Sorvete
{
	public $sorvete;

	public function __construct(Sorvete $sorvete)
	{
		$this->sorvete = $sorvete;
		$this->setNome($this->getSorvete()->getNome());
	}

	public function getSorvete()
	{
		return $this->sorvete;
	}
}