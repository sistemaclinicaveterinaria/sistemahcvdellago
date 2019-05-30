<div class="bs-example">

    <h1 class="border-bottom pb-3 mb-4">Formulario</h1>

    <form class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="Fecha">{{'Fecha'}}</label>
        <div class="col-sm-9">
        <input  class="form-control" name="Fecha" id="Fecha" value="{{ isset($documento->Fecha)?$documento->Fecha:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Nombre">{{'Nombre'}}</label>
        <div class="col-sm-9">
        <input  class="form-control"  name="Nombre" id="Nombre" value="{{ isset($documento->Nombre)?$documento->Nombre:'' }}">
        </div>
        </div>
       
        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Archivo">{{'Archivo'}}</label>
        <div class="col-sm-9">

        @if(isset($documento->Archivo))
        <br/>
        <img src="{{ asset('storage').'/'.$documento->Archivo}}" alt="" width="100">
        <br>
        @endif
        <input type="file" name="Archivo" id="Archivo" value="">    
       </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                
            <input class="btn btn-primary"  type="submit" value="{{ $Modo=='crear' ? 'Adjuntar Documento':'Editar Documento' }}">
            <a class="btn btn-secondary" href="{{ url('documentos') }}"> Volver</a>
            </div>
        </div>
    </form>
</div>
