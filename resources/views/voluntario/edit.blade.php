@extends('gentelella.layouts.app')


@section('content')
<div class="x_panel modal-content">
    <div class="x_title">
       <h2>Editar Voluntário</h2>
       <div class="clearfix"></div>
    </div>
    <div class="x_panel">
       <div class="x_content">
        <form action="{{action('VoluntarioController@update', $voluntario->id)}}"  method="POST">
            {{ csrf_field() }}
            @method('PATCH')
                <div class="row ">
                        <div class="col-lg-6 mb-3 container">
                            <label class="form-label fw-normal" for="nomeCompleto">Nome Completo:</label>
                            <input required class="form-control" name="nome" type="text" id="nomeCompleto" placeholder="Nome Completo" maxlength="96" value="{{$voluntario->nome}}">
                        </div>
                        <div class="col-lg-4 mb-3 form-group">
                            <label class="form-label fw-normal">Data de Nascimento:</label>
                            <input required class="form-control datepicker" name="data_de_nascimento" id="data-de-nascimento" type="date" placeholder="dd/mm/aaaa" value="{{$voluntario->data_de_nascimento}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">CPF:</label>
                            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" pattern=".{14,}" maxlength="14" class="form-control" required value="{{$voluntario->cpf}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Tipo Sanguineo:</label>
                            <select id="rh_fator" name="tipo_sanguineo" placeholder="RH" pattern=".{3,}" maxlength="3" class="form-control" required>
                                    <option selected value="{{$voluntario->tipo_sanguineo}}">{{$voluntario->tipo_sanguineo}}</option>
                                    <option >A+</option>
                                    <option >A-</option>
                                    <option >B+</option>
                                    <option >B-</option>
                                    <option >AB+</option>
                                    <option >AB-</option>
                                    <option >O+</option>
                                    <option >O- </option>
                            
                            </select>
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email"  maxlength="50" class="form-control" required value="{{$voluntario->email}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" placeholder="(21)XXXXX-XXXX"  maxlength="14" class="form-control" required value="{{$voluntario->telefone}}">
                        </div>
                        
                            
                                <div class="col-md-4 mb-3 form-group">
                                   <label class="form-label fw-normal">Nível de Instrução:</label>
                                    <select id="nv_instruction" name="nivel_instrucao" placeholder="Nível de Instrução"  maxlength="32" class="form-control" required value="{{$voluntario->nivel_intrucao}}"> 
                                     
                                          <option selected value="{{ $voluntario->nivel_intrucao }}" >{{ $voluntario->nivel_intrucao }}</option>
                                       
                                         <option>Fundamental - Incompleto</option>
                                         <option>Fundamental - Completo</option>
                                         <option>Médio - Incompleto</option>
                                         <option>Médio - Completo</option>
                                         <option>Superior - Incompleto</option>
                                         <option>Superior - Completo</option>
                    
                                    </select>
                                        
                                
                                </div>
                            
                        <div class="col-md-8 mb-3 form-group">
                            <label class="form-label fw-normal">Endereço:</label>
                            <input type="text" id="adress" name="endereco" placeholder="Endereço"  maxlength="50" class="form-control" required value="{{$voluntario->endereco}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Complemento:</label>
                            <input type="text" id="complement" name="complemento" placeholder="Complemento"  maxlength="50" class="form-control" required value="{{$voluntario->complemento}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Cep:</label>
                            <input type="text" id="cep" name="cep" placeholder="00000-000"  maxlength="9" class="form-control" required value="{{$voluntario->cep}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" placeholder="Bairro"  maxlength="50" class="form-control" required value="{{$voluntario->bairro}}">
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Municipio:</label>
                            <input type="text" id="municipio" name="municipio" placeholder="Municipio"  maxlength="50" class="form-control" required value="{{$voluntario->municipio}}">
                        </div>
                        
                        
                        
                        
                        
                           

                        <div class="row clonedata"> 
                              @foreach ($voluntario->profissoes as $profissoes)
                                 <div id="select1" class="col-md-8 col-sm-12">
                                    <label class="control-label ">Profissão:</label>
                                        <select  required class="form-control" name="profissao_nome[{{$profissoes->id}}]" id="profissao">
                                            <option value="{{isset($profissoes->profissao_nome) ? $profissoes->profissao_nome : null}}" >{{isset($profissoes->profissao_nome) ? $profissoes->profissao_nome : null}}</option> 
                                                @foreach ($profissao as $profisao)
                                                    <option value="{{ $profisao->nome }}" >{{ $profisao->nome }}</option>
                                                @endforeach
                                        </select> 
                                @endforeach

                                
                            </div>   
                            
                            
                            <div class="col-md-4 tn-buttons">
                                <label class="control-label">Adicionar:</label>
                                <br/>
                                 <button type="button" class="mb-xs mr-xs btn btn-info addmore"><i class="fa fa-plus"></i></button>
                                 {{-- <button type="button" class="mb-xs mr-xs btn btn-danger removemore"><i class="fa fa-remove"></i></button> --}}
                            </div>
                              
                        </div>
                        <div id="packagingappendhere">
                           
                        </div>

                        <div class="row clonedata">

                            
                            @foreach ($voluntario->experiencias as $exp)
                              
                            <div id="select1" class="col-md-8 col-sm-12 tn_value">
                                <label class="control-label ">Experiêcia:</label>
                                <select  required class="form-control" name="experiencia_nome[{{$exp->id}}]" id="experiencia">
                                  
                                        <option value="{{isset($exp->experiencia_nome) ? $exp->experiencia_nome : null}}" >{{isset($exp->experiencia_nome) ? $exp->experiencia_nome : null}}</option>

                                        @foreach ($experiencias as $experiencia)
                                            
                                             <option value="{{ $experiencia->nome }}" >{{ $experiencia->nome }}</option>
                                        
                                        @endforeach

                                        
                                </select>
                            </div> 

                            @endforeach
                            
                            {{-- <div id="select1" class="col-md-8 col-sm-12">
                                <label class="control-label ">Experiêcia:</label>
                                <select  required class="form-control" name="experiencia_nome[]" id="profissao">
                                  
                                       
                                        <option value="{{ $experiencia->nome }}" >{{ $experiencia->nome }}</option>
                                  
                                        
                                </select>
                            </div>  --}}
                           

                            {{-- <div id="select1" class="col-md-8 col-sm-12">
                                <label class="control-label ">Experiêcia:</label>
                                <select  required class="form-control" name="experiencia_nome[]" id="profissao">
                                    @foreach ($experiencias as $experiencia)
                                       
                                        <option value="{{ $experiencia->nome }}" >{{ $experiencia->nome }}</option>
                                   
                                    @endforeach
                                        
                                </select>
                            </div>    --}}
                            
                            
                            <div class="col-md-4 tn-buttons">
                                <label class="control-label">Adicionar:</label>
                                <br/>
                                 <button id="1" type="button" class="mb-xs mr-xs btn btn-info addmore2"><i class="fa fa-plus"></i></button>
                                 {{-- <button type="button" class="mb-xs mr-xs btn btn-danger removemore"><i class="fa fa-remove"></i></button> --}}
                            </div>
                              
                        </div>
                        <div id="packagingappendhere2">
                           
                        </div>



                       
            </div>
            <br>
            <div class="card-footer text-center">
                <button type="update" id="btn_salvar" class="btn btn-primary" >Salvar</button>
            </div>
         </form>
   </div>
</div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/vanillaMasker.min.js')}}"></script>
<script>
    VMasker($("#cpf")).maskPattern("999.999.999-99");
    VMasker($("#data_nasc")).maskPattern("99/99/9999");
    VMasker($("#telefone")).maskPattern("(99)99999-9999");
    VMasker($("#cep")).maskPattern("99999-999");
 
</script>
<script type="text/javascript">




    //jquery
    $(document).on('click', '.addmore', function (ev) {
        var $clone = $(this).parent().parent().clone(true);
        var $newbuttons = "<label>Adicionar:</label><br><button type='button' class='mb-xs mr-xs btn btn-info addmore'><i class='fa fa-plus'></i></button><button type='button' class='mb-xs mr-xs btn btn-danger removemore'><i class='fa fa-remove'></i></button>";
        $clone.find('.tn-buttons').html($newbuttons).end().appendTo($('#packagingappendhere'));
    });

    $(document).on('click', '.removemore', function () {
        $(this).parent().parent().remove();
    });

    $(document).on('click', '.addmore2', function (ev) {
        var $clone = $(this).parent().parent().clone(true);
        var $newbuttons = "<label>Adicionar:</label><br><button type='button' class='mb-xs mr-xs btn btn-info addmore'><i class='fa fa-plus'></i></button><button type='button' class='mb-xs mr-xs btn btn-danger removemore'><i class='fa fa-remove'></i></button>";
        $clone.find('.tn-buttons').html($newbuttons).end().appendTo($('#packagingappendhere2'));
    });

    $(document).on('click', '.removemore', function () {
        $(this).parent().parent().remove();
    });
    

	</script>
@endpush