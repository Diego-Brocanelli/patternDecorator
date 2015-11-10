<?php

namespace Sorvete;

class SorveteNapolitano extends Sorvete
{
	public function __construct()
	{
		$this->setNome('Sorvete Napolitano');
	}

	public function getQuantidadeBolas()
	{
		return 0;
	}

	public function getQuantidadePreco()
	{
		return 2.5;
	}
}