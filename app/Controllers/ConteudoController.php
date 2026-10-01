<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
    protected $helpers = ['contato'];

    public function index() 
    {
        // Instancia a Model
        $conteudoModel = new ConteudoModel();

        //Busca o registro com a Id = 1
        $dados['conteudo'] = $conteudoModel->find(1);

        // Envia dados para a view 'home'
        return view('home', $dados);
    }

     public function contato() 
    {
        // Instancia a Model
        $conteudoModel = new ConteudoModel();

        //Busca o registro com a Id = 1
        $dados['conteudo'] = $conteudoModel->find(2);

        // Envia dados para a view 'home'
        return view('contato', $dados);
    }

    public function produtos() 
    {
        // Instancia a Model
        $conteudoModel = new ConteudoModel();

        //Busca o registro com a Id = 1
        $dados['conteudo'] = $conteudoModel->find(3);

        // Envia dados para a view 'home'
        return view('contato', $dados);
    }

}
