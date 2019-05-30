<body>
<div class="bs-example">

    <h1 class="border-bottom pb-3 mb-4">Formulario</h1>

    <form class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Nombre">{{'Nombre'}}</label> 
        <div class="col-sm-9">
        <input  class="form-control" type="text" name="Nombre" id="Nombre" value="{{ isset($mascotas-> Nombre)?$mascotas->Nombre:'' }}">
        </div>
        </div>
       
        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Genero">{{'Genero'}}</label>
        <div class="col-sm-9">
        <input  class="form-control" type="text" name="Genero" id="Genero" value="{{ isset($mascotas-> Genero)?$mascotas->Genero:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Fecha_Nacimiento">{{'Fecha de Nacimiento'}}</label>
        <div class="col-sm-9">
        <input  class="form-control" type="text" name="Fecha_Nacimiento" id="Fecha_Nacimiento" value="{{ isset($mascotas-> Fecha_Nacimiento)?$mascotas->Fecha_Nacimiento:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Especie">{{'Especie'}}</label>
        <div class="col-sm-9">
        <input  class="form-control" type="text" name="Especie" id="Especie" value="{{ isset($mascotas-> Especie)?$mascotas->Especie:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="Raza">{{'Raza'}}</label>
        <div class="col-sm-9">
        <input  class="form-control"  type="text" name="Raza" id="Raza" value="{{ isset($mascotas-> Raza)?$mascotas->Raza:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label"  for="Color">{{'Color'}}</label>
        <div class="col-sm-9">
        <input  class="form-control" type="text" name="Color" id="Color" value="{{ isset($mascotas-> Color)?$mascotas->Color:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Microchip">{{'Microchip'}}</label>
        <div class="col-sm-9">
        <input  class="form-control" type="text" name="Microchip" id="Microchip" value="{{ isset($mascotas-> Microchip)?$mascotas->Microchip:'' }}">
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="Foto">{{'Foto'}}</label>
        <div class="col-sm-9">

        @if(isset($mascotas->Foto))
        <br/>
        <img src=" {{ asset('storage').'/'.$mascotas->Foto}}" alt="" width="200" >
        <br/>
        @endif
        <input type="file" name="Foto" id="Foto" value="{{ isset($mascotas-> Foto)?$mascotas->Foto:'' }}">
        
    
    
       </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                
            <input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Registrar Mascota':'Modificar Mascota'}}">
            <a class="btn btn-secondary" href="{{url('Mascotas')}}"> Volver</a>

            </div>
        </div>
    </form>
</div>
</body>