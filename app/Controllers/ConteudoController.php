<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
// Em app/Controllers/BaseController.php (ou dentro do seu Controller específico)
protected $helpers = ['url'];


    public function index()
    {
        //1_ Instancia o Model
        $conteudoModel = new ConteudoModel();

        //2_Busca o registro com ID
        $dados['conteudo'] = $conteudoModel->find(1);
        
        return view('home', $dados);
    }
    public function Contato()
    {
          //1_ Instancia o Model
          $conteudoModel = new ConteudoModel();

          //2_Busca o registro com ID
          $dados['conteudo'] = $conteudoModel->find(1);
        return view('Contato', $dados);
    }
    public function QuemSou()
    {
          //1_ Instancia o Model
          $conteudoModel = new ConteudoModel();

          //2_Busca o registro com ID
          $dados['conteudo'] = $conteudoModel->find(8);
        return view('QuemSou', $dados);
    }
    public function PlanosFuturos()
    {
          //1_ Instancia o Model
          $conteudoModel = new ConteudoModel();

          //2_Busca o registro com ID
          $dados['conteudo'] = $conteudoModel->find(9);
        return view('PlanosFuturos', $dados);
    }
    public function Habilidades()
    {
          //1_ Instancia o Model
          $conteudoModel = new ConteudoModel();

          //2_Busca o registro com ID
          $dados['conteudo'] = $conteudoModel->find(10);
        return view('Habilidades', $dados);
    }
    public function FaleComigo() : string 
    {
          //1_ Instancia o Model
          $conteudoModel = new ConteudoModel();

          //2_Busca o registro com ID
          $dados['conteudo'] = $conteudoModel->find(12);
        return view('FaleComigo', $dados);
    }
    public function listar(): string
    {
      $model = new ConteudoModel();

      return view('conteudo/listar', [
        'conteudos' => $model->findAll()
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
  

