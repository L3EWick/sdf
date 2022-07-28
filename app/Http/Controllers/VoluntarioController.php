<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profissao;
use App\Models\Experiencia;
use App\Models\Voluntario;
use App\Models\Voluntario_profissao;
use App\Models\Voluntario_exp;

class VoluntarioController extends Controller
{
    public function index()
    {
        $voluntarios = Voluntario::with('experiencias', 'profissoes')->get();
       
        // dd($voluntarios[0]->experiencias);
       
        
        
        return view('voluntario.index', compact('voluntarios'));

        // return view('voluntario.index');
    }

    public function create()
    {
        $profissoes = Profissao::all();
        $experiencias = Experiencia::all();
        return view('voluntario.create',compact('profissoes','experiencias'));

    }
    
    public function store (Request $request)
    {
        // dd($request->profissao_nome);
        
        $voluntario = new Voluntario;

        $voluntario->nome = $request->nome;
        $voluntario->data_de_nascimento = $request->data_de_nascimento;
        $voluntario->cpf = $request->cpf;
        $voluntario->tipo_sanguineo = $request->tipo_sanguineo;
        $voluntario->endereco = $request->endereco;
        $voluntario->cep = $request->cep;
        $voluntario->bairro = $request->bairro;
        $voluntario->municipio = $request->municipio;
        $voluntario->email = $request->email;
        $voluntario->telefone = $request->telefone;
        $voluntario->nivel_intrucao = $request->nivel_instrucao;
        $voluntario->complemento = $request->complemento;
        


        $voluntario->save();


        foreach($request->profissao_nome as $profissao_nome)
        {

            $profissao = new Voluntario_profissao;

            $profissao->profissao_nome = $profissao_nome;
            $profissao->voluntario_id = $voluntario->id;
            $profissao->save();



        }

        foreach($request->experiencia_nome as $experiencia_nome)
        {

            $experiencia = new Voluntario_exp;

            $experiencia->experiencia_nome = $experiencia_nome;
            $experiencia->voluntario_id = $voluntario->id;
            $experiencia->save();



        }

        
        // $voluntario_profissao = new Voluntario_profissao;
        
        // $voluntario_profissao->nome = $request->profissao_nome;

        // $voluntario_profissao->save();



        // $voluntario_experiencia = new Voluntario_experiencia;

        // $voluntario_experiencia->nome = $request->experiencia_nome;

        // $voluntario_experiencia->save();


        



        return redirect()->route('voluntario.index');
    }

    public function destroy($id)
	{
		$voluntario = Voluntario::find($id);

		$voluntario->delete();


	}
    

    public function edit($id){

        $profissao = Profissao::all();
        $experiencias = Experiencia::all();
		$voluntario = Voluntario::with('experiencias', 'profissoes')->find($id);
        // dd($voluntario);
        

        return view('voluntario.edit', compact('voluntario','experiencias','profissao'));





    }


    public function update(Request $request, $id){


      
		$voluntario = Voluntario::with('experiencias', 'profissoes')->find($id);

        
        $voluntario->nome = $request->nome;
        $voluntario->data_de_nascimento = $request->data_de_nascimento;
        $voluntario->cpf = $request->cpf;
        $voluntario->tipo_sanguineo = $request->tipo_sanguineo;
        $voluntario->endereco = $request->endereco;
        $voluntario->cep = $request->cep;
        $voluntario->bairro = $request->bairro;
        $voluntario->municipio = $request->municipio;
        $voluntario->email = $request->email;
        $voluntario->telefone = $request->telefone;
        $voluntario->nivel_intrucao = $request->nivel_instrucao;
        $voluntario->complemento = $request->complemento;



        // dd($request->all());

        foreach($request->profissao_nome as $key => $valor)
        {
            $profissao = Voluntario_profissao::find($key);
            $profissao->profissao_nome = $valor;
            $profissao->save();
        }

        foreach($request->experiencia_nome as $key => $valor)
        {
           
           
            $experiencia = Voluntario_exp::find($key);
            $experiencia->experiencia_nome = $valor;
            $experiencia->save();
        }

        return redirect()->route('voluntario.index');
    

    }
  
        
        
     
}
