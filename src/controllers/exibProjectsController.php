<?php

/* 
 * Controler responável por gerenciar a página de visualização de projetos
 * 
 */

class exibProjects 
{
    //Action Principal
    public function index () {
        
        $this->loadView('exibProjectsView');
        
    }
    
}

