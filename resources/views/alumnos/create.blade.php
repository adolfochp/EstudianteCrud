@extends('layout/template')


@section('title','Registrar alumno | Escuela')

@section('contenido')

<main>
    <div class="container py-4">
        <h2 >Registrar alumno</h2>

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach

             </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            
        @endif

        <form action="{{url('alumnos') }}" method="post">
        @csrf

        <div class="mb-3 row">
            <label for='matricula' class="col-sm-2 col-form-label">Matricula</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="matricula" id="matricula" values="{{old
                ('matricula')}}" required> 

            </div>
        
        </div>

        <div class="mb-3 row">
            <label for='nombre' class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nombre" id="nombre" values="{{old
                ('nombre')}}" required> 

            </div>
        
        </div>


        <div class="mb-3 row">
            <label for='fecha' class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="fecha" id="fecha" values="{{old
                ('fecha')}}" required> 

            </div>
        
        </div>


        <div class="mb-3 row">
            <label for='telefono' class="col-sm-2 col-form-label">Telefono</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="telefono" id="telefono" values="{{old
                ('telefono')}}" required> 

            </div>
        
        </div>


        <div class="mb-3 row">
            <label for='email' class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="email" id="email" values="{{old
                ('email')}}"> 

            </div>
        
        </div>




        <div class="mb-3 row">
            <label for='nivel' class="col-sm-2 col-form-label">Nivel</label>
            <div class="col-sm-5">
                <select name="nivel" id="nivel" class="form-select" required>
                    <option value=" ">Selecionar nivel</option>
                    @foreach ($niveles as $nivel)
                    <option value="{{  $nivel->id}}">{{ $nivel->nombre}}</option>
                        
                    @endforeach

                </select>

            </div>
        
        </div>

        <a href="{{url ('alumnos')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>





        
        </form>

    </div>    

</main>    