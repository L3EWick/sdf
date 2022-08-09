@extends('gentelella.layouts.app')


@section('content')
<div class="x_panel modal-content">
	<div class="x-title">
		<h2>Dados da Inscrição</h2>
		<div class="clearfix"></div>
	</div>

	
	<div class="x_panel">
		<div class="x_content">
			{{-- {{$inscricao}} --}}
			<span class="section">Informações Pessoais</span>
			<div class="row" style="padding-bottom: 1%"> 
				
			  
			</div>
			
			<div class="row" style="padding-bottom: 1%">
				<div class="col-md-2 col-sm-2 col-xs-12 text-left"> 
					{{-- <img src="storage/images/voluntarios/{{$voluntario->image}}" alt="" title="profile image" /> --}}
					<img src="{{url('storage/images/voluntarios/'.$voluntario->image)}}" alt="" title="profile image" style="width: 100x; height: 150px;"/>

				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Nome: </strong>{{$voluntario->nome}}
				</div>

				
				

			
				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Data de Nascimento: </strong>{{$voluntario->data_de_nascimento}}
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>CPF: </strong>{{$voluntario->cpf}}
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Tipo Sanguineo: </strong>{{$voluntario->tipo_sanguineo}}
				</div>

				<br>
				<br>
				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Email: </strong>{{$voluntario->email}}
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Telefone: </strong>{{$voluntario->telefone}}
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Nível de Instrução: </strong>{{$voluntario->nivel_intrucao}}
				</div>
				
				
				<br>
				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Endereço: </strong>{{$voluntario->endereco}}
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Complemento: </strong>{{$voluntario->complemento}}
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Cep: </strong>{{$voluntario->cep}}
				</div>
				
				<br>
				<br>
				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Bairro: </strong>{{$voluntario->bairro}}
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Município: </strong>{{$voluntario->municipio}}
				</div>

				
				@foreach ($profissao as $profission)
					
				
				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Profissão: </strong>{{$profission->nome}}
				</div>
				
				@endforeach
				
				
				@foreach ($experiencias as $experiencia)
				<div class="col-md-4 col-sm-4 col-xs-12 text-left">
					<strong>Profissão: </strong>{{$experiencia->nome}}
				</div>
				
					
				@endforeach

	
				
			</div>
			<br>
			
		</div>
	</div>	

@endsection

@push('scripts')

	<script type="text/javascript">


	</script>
@endpush