<?php

namespace Sorvete;

class Napolitano
{
        public function __construct() 
        {
                $sorvete = new SorveteNapolitano();
                
                $this->retornaInformacoes($sorvete);

                $sorvete = new Creme($sorvete);
                $sorvete = new Chocolate($sorvete);
                $sorvete = new Morango($sorvete);
                
                $this->retornaInformacoes($sorvete);
        }

        /**
         * Retorna string para demonstração de dados.
         * @param \Sorvete\Sorvete $sorvete
         */
        public function retornaInformacoes(Sorvete $sorvete) {
                echo $sorvete->getNome() . ' - '
                . $sorvete->getQuantidadeBolas() . ' preco : '
                . $sorvete->getQuantidadePreco() . '<br />';
        }

}
