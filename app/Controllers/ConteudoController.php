<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
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
  
}
