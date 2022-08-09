@extends('gentelella.layouts.app')


@section('content')
<div class="x_panel modal-content">
    <div class="x_title">
       <h2>Novo(a) Voluntário</h2>
       <div class="clearfix"></div>
    </div>
    <div class="x_panel">
       <div class="x_content">
        <form action="{{url('/eventos')}}"  method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="row ">
                   
                    <div class="container">
                        <div class="col-lg-4 mb-3 ">
                            <label class="form-label fw-normal" for="nomeCompleto">Titulo do Evento:</label>
                            <input required class="form-control" name="nome" type="text" id="nome" placeholder="Titulo do Evento" maxlength="96">
                        </div>
                       
                        
                    </div>    
                    <div class="container">
                        <div class="col-lg-4 mb-3 ">
                            <label class="form-label fw-normal" for="nomeCompleto">Descriçao do Evento:</label>
                           
                            <textarea class="form-control" id="nome" rows="3"  name="descricao"></textarea>
                        </div>
                       
                        
                    </div>    

                       
                       
                       

                        <div class="row clonedata">
                            <div id="select1" class="col-md-4 col-sm-12">
                              
                            <label class="form-label fw-normal">Fotos do Evento:</label>
                            <input id="input-image-1" name="image[]" type="file" class="form-control-file" multiple>
                            </div>   
                            
                            
                            <div class="col-md-2 tn-buttons">
                                <label class="control-label">Adicionar:</label>
                                <br/>
                                 <button type="button" class="mb-xs mr-xs btn btn-info addmore"><i class="fa fa-plus"></i></button>
                                 {{-- <button type="button" class="mb-xs mr-xs btn btn-danger removemore"><i class="fa fa-remove"></i></button> --}}
                            </div>
                              
                        </div>
                        <div id="packagingappendhere">
                           
                        </div>




                       
            </div>
            <br>
            <div class="card-footer text-center">
                <button type="submit" id="btn_salvar" class="btn btn-primary">Salvar</button>
            </div>
         </form>
   </div>
</div>
</div>

@endsection

@push('scripts')

<script>
    $("#input-image-1").fileinput({
        uploadUrl: "/site/image-upload",
        allowedFileExtensions: ["jpg", "png", "gif"],
        maxImageWidth: 200,
        maxFileCount: 1,
        resizeImage: true
    }).on('filepreupload', function() {
        $('#kv-success-box').html('');
    }).on('fileuploaded', function(event, data) {
        $('#kv-success-box').append(data.response.link);
        $('#kv-success-modal').modal('show');
    });
    </script>
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