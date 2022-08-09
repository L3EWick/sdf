@extends('gentelella.layouts.app')


@section('content')
<div class="x_panel modal-content">
    <div class="x_title">
       <h2>Eventos</h2>
       <ul class="nav navbar-right panel_toolbox">
          <a href="{{url('eventos/create')}}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nova Sala"> Novo Evento </a>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_panel">
       <div class="x_content">
         <table id="tb_voluntarium" class="table table-hover table-striped compact">
           


            <thead>
               <tr>
                  <th>Título do Evento</th>
                  
                 
                  <th>Ações</th>
                  {{-- <th>Foto</th> --}}

               </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                   <tr>
                     <td>
                        {{$evento->nome}}
                     </td> 
                    
                    
                  
                     <td> 
                        <a
                        id="btn_exclui_funcionario"

                        class="btn btn-danger btn-xs action botao_acao btn_excluir"
                        {{-- data-evento = {{$evento->id}}> --}}
                        >

                        <i class="glyphicon glyphicon-remove "></i>
                     
                     
                     </a>
                     
                     <a
                        id="btn_edita_usuario"
                        class="btn btn-warning btn-xs action botao_acao btn_editar" 
                        {{-- href="{{action('EventoController@edit', $evento->id)}}" --}}
                        title="Editar Funcionario">  
                        <i class="glyphicon glyphicon-pencil "></i>
                     </a>

                     <a
                        id="btn_edita_usuario"
                        class="btn btn-primary btn-xs action botao_acao btn_editar" 
                        {{-- href="{{action('EventoController@show', $evento->id)}}" --}}
                        title="Editar Funcionario">  
                        <i class="glyphicon glyphicon-eye-open "></i>
                      </a>
                     </td> 

                     {{-- <td>
                        <img src="storage/images/voluntarios/{{$voluntario->image}}" alt="" title="profile image" />
                     </td>  --}}
                   </tr>
               @endforeach

            </tbody>
          
        </table>
      
       </div>
    </div>
 </div>

@endsection

@push('scripts')

	<script type="text/javascript">


	</script>
@endpush