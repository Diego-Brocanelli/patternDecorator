<?php

namespace Sorvete;

/**
 * Classe construção do sorvete napolitano.
 * 
 * @package Sorvete
 * @author Diego Brocanelli <diegod2@msn.com>
 */
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
     * 
     * @param \Sorvete\Sorvete $sorvete
     */
    public function retornaInformacoes(Sorvete $sorvete) 
    {
        echo $sorvete->getNome() . '<br>'
           . '> Quantidade: ' . $sorvete->getQuantidadeBolas() . '<br/>'
           . '> R$ ' . $sorvete->getQuantidadePreco() . '<br />';
    }
}
