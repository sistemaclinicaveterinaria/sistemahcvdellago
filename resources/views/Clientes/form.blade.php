<h1 class="border-bottom pb-3 mb-4">Formulario</h1>

    <form class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="rut_cliente" >{{'Rut'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('rut_cliente')?'is-invalid':''}} " name="rut_cliente" id="rut_cliente" 
        value="{{ isset($cliente->rut_cliente)?$cliente->rut_cliente:old('rut_cliente')}}">
            {!! $errors->first('rut_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="nom_cliente"  >{{'Nombre'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('nom_cliente')?'is-invalid':''}}" name="nom_cliente" id="nom_cliente"
        value="{{ isset($cliente->nom_cliente)?$cliente->nom_cliente:old('nom_cliente') }}">
            {!! $errors->first('nom_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="apePat_cliente" >{{'Apellido Paterno'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('apePat_cliente')?'is-invalid':''}}" name="apePat_cliente" id="apePat_cliente" 
        value="{{ isset($cliente->apePat_cliente)?$cliente->apePat_cliente:old('apePat_cliente') }}">
        {!! $errors->first('apePat_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="apeMat_cliente"  >{{'Apellido Materno'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('apeMat_cliente')?'is-invalid':''}}" name="apeMat_cliente" id="apeMat_cliente" 
        value="{{ isset($cliente->apeMat_cliente)?$cliente->apeMat_cliente:old('apeMat_cliente') }}">

          {!! $errors->first('apeMat_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
       
        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dire_cliente" >{{'Direccion'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('dire_cliente')?'is-invalid':''}}"name="dire_cliente" id="dire_cliente" 
        value="{{ isset($cliente->dire_cliente)?$cliente->dire_cliente:old('dire_cliente')}}">
            
        {!! $errors->first('dire_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="ciudad_cliente"  >{{'Ciudad'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('ciudad_cliente')?'is-invalid':''}}"name="ciudad_cliente" id="ciudad_cliente" 
        value="{{ isset($cliente->ciudad_cliente)?$cliente->ciudad_cliente:old('ciudad_cliente')}}">

            
        {!! $errors->first('ciudad_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="telefono_cliente" >{{'Telefono'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('telefono_cliente')?'is-invalid':''}}" name="telefono_cliente" id="telefono_cliente" 
         value="{{ isset($cliente->telefono_cliente)?$cliente->telefono_cliente:old('telefono_cliente')}}">

            
         {!! $errors->first('telefono_cliente','<div class="invalid-feedback">:message</div>')!!}
         </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="email_cliente" >{{'Email'}}</label>
        <div class="col-sm-9">
        <input  type="text" class="form-control {{$errors->has('email_cliente')?'is-invalid':''}}" name="email_cliente" id="email_cliente" 
         value="{{ isset($cliente->email_cliente)?$cliente->email_cliente:old('email_cliente') }}">

         {!! $errors->first('email_cliente','<div class="invalid-feedback">:message</div>')!!}
        </div>
        </div>
       
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">

            <input type="submit" class="btn btn-primary" value="{{ $Modo=='crear' ? 'Agregar Cliente':'Modificar Cliente'}}">
            <a class="btn btn-secondary" href="{{url('clientes')}}"> Volver</a>

            </div>
        </div>
    </form>
</div>
