<div class="bs-example">

    <h1 class="border-bottom pb-3 mb-4">Formulario</h1>

    <form class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Fecha_Difuncion">{{'Fecha_Difuncion'}}</label>
        <div class="col-sm-9">
        <input  class="form-control"  name="Fecha_Difuncion" id="Fecha_Difuncion" value="{{ isset($rip->Fecha_Difuncion)?$rip->Fecha_Difuncion:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Motivo">{{'Motivo'}}</label>
        <div class="col-sm-9">
        <input  class="form-control"   name="Motivo" id="Motivo" value="{{ isset($rip->Motivo)?$rip->Motivo:'' }}">
        </div>
        </div>
       
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                
            <input class="btn btn-primary"  type="submit" value="{{ $Modo=='Registrar' ? 'Agregar':'Editar' }}">
            <a class="btn btn-secondary" href="{{ url('rips') }}"> Volver</a>
            </div>
        </div>
    </form>
</div>
