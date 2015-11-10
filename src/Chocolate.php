<?php

namespace Sorvete;

class Chocolate extends SorveteSabor
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
         * @return int
         */
	public function getQuantidadeBolas()
	{
		return 1 + $this->getSorvete()->getQuantidadeBolas();
	}

        /**
         * Retorna o preço do sorvete
         * @return float
         */
	public function getQuantidadePreco()
	{
		return 1.5 + $this->getSorvete()->getQuantidadePreco();
	}
}