@extends('layouts.Plantilla')

@section('titulo')

@section('contenido')

@section('footer')

    @if (@session('chido'))
    <x-Alert tipo="danger">{{ session('chido')}}</x-Alert>   
    @endif
    @session ('chido')
    <script>
        Swal.fire({
  title: "Todo correcto",
  text:  '{{$value}}',
  icon: "success"
});
    </script>
    @endsession

    <div class="card front monospace">
        <div class="card-header fs-5 text-center text-primary">
            {{__('Registro Libros')}}
        </div>

        <div class="card-body text-justify">

            <form action='/registrarLibro' method="POST">
                @csrf
                <div class="mb-3">
                    <label for="isbn" class="form-label"> ISBN: </label>
                        <input type="number" class="form-control" name="txtisbn" value="{{old('txtisbn')}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtisbn') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label"> {{__('Titulo')}}: </label>
                            <input type="text" class="form-control" name="txttitulo" value="{{old('txttitulo')}}">
                            <small class="text-danger fst-italic">{{ $errors->first('txttitulo') }}</small>
                        </div>
                        <div class="mb-3">
                            <label for="Autor" class="form-label"> {{__('Autor')}}: </label>
                                <input type="text" class="form-control" name="txtAutor" value="{{old('txtAutor')}}">
                                <small class="text-danger fst-italic">{{ $errors->first('txtAutor') }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="Paginas" class="form-label"> {{__('Paginas')}}: </label>
                                    <input type="text" class="form-control" name="txtPaginas" value="{{old('txtPaginas')}}">
                                    <small class="text-danger fst-italic">{{ $errors->first('txtPaginas') }}</small>
                                </div>
                                <div class="mb-3">
                                    <label for="Anio" class="form-label"> {{__('Anio')}}: </label>
                                        <input type="text" class="form-control" name="txtAnio" value="{{old('txtAnio')}}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtAnio') }}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Editorial" class="form-label"> {{__('Editorial')}}: </label>
                                            <input type="text" class="form-control" name="txtEditorial" value="{{old('txtEditorial')}}">
                                            <small class="text-danger fst-italic">{{ $errors->first('txtEditorial') }}</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="EmailEditorial" class="form-label"> {{__('Email de Editorial')}}: </label>
                                                <input type="text" class="form-control" name="txtEmailEditorial" value="{{old('txtEmailEditorial')}}">
                                                <small class="text-danger fst-italic">{{ $errors->first('txtEmailEditorial') }}</small>
                                            </div>
                            
    </div>
    </div>
    <div class="d-grid gap-2 mt-2 mb-1">
        <button type="submit" class="btn btn-secondary btn-sm">{{__('Guardar Libro')}}</button>
    </div>
</form>

    @endsection
