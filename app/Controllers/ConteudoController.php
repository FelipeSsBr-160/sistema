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

    public function listar(): string
    {
        $model = new ConteudoModel();

        return view('conteudo/listar', [
            'conteudos' => $model->findAll(),
        ]);
    }

    public function editar($id): string
    {
        $model = new ConteudoModel();
        $conteudo = $model->find($id);

        if ($conteudo === null) {
            throw PageNotFoundException::forPageNotFound(
                'O conteúdo solicitado não foi encontrado.'
            );
        }

        return view('conteudo/editar', [
            'conteudo' => $conteudo,
            'erros' => [],
        ]);
    }

    public function atualizar($id)
    {
        $model = new ConteudoModel();
        $conteudo = $model->find($id);

        if ($conteudo === null) {
            throw PageNotFoundException::forPageNotFound(
                'O conteúdo solicitado não foi encontrado.'
            );
        }

        $dadosPost = [
            'Titulo' => $this->request->getPost('Titulo'),
            'Texto' => $this->request->getPost('Texto'),
        ];

        $regras = [
            'Titulo' => 'required|max_length[255]',
            'Texto' => 'required',
        ];

        if (!$this->validate($regras)) {
            $conteudo['Titulo'] = $dadosPost['Titulo'] ?? '';
            $conteudo['Texto'] = $dadosPost['Texto'] ?? '';

            return view('conteudo/editar', [
                'conteudo' => $conteudo,
                'erros' => $this->validator->getErrors(),
            ]);
        }

        $model->update($id, $dadosPost);
        return redirect()
            ->to(site_url('conteudos'))
            ->with('mensagem', 'Conteúdo atualizado com sucesso.');
    }
}
