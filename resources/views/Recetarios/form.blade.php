<div class="bs-example">

    <h1 class="border-bottom pb-3 mb-4">Formulario</h1>

    <form class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Fecha">{{'Fecha'}}</label>
        <div class="col-sm-9">
        <input  class="form-control"  name="Fecha" id="Fecha" value="{{ isset($recetario->Fecha)?$recetario->Fecha:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Control_Fecha">{{'Control_Fecha'}}</label>
        <div class="col-sm-9">
        <input  class="form-control"  name="Control_Fecha" id="Control_Fecha" value="{{ isset($recetario->Control_Fecha)?$recetario->Control_Fecha:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Descripcion">{{'Descripcion'}}</label>
        <div class="col-sm-9">
        <input  class="form-control"  name="Descripcion" id="Descripcion" value="{{ isset($recetario->Descripcion)?$recetario->Descripcion:'' }}">
        </div>
        </div>
       
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                
            <input class="btn btn-primary"  type="submit" value="{{ $Modo=='Registrar' ? 'Agregar':'Editar' }}">
            <a class="btn btn-secondary" href="{{ url('recetarios') }}"> Volver</a>
            </div>
        </div>
    </form>
</div>
