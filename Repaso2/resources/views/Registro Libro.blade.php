@extends('layouts.Plantilla')

@section('titulo')

@section('contenido')

@section('footer')

    <div class="card front monospace">
        <div class="card-header fs-5 text-center text-primary">
            Registro Libros
        </div>

        <div class="card-body text-justify">

            <form action='/registrarLibro' method="POST">
                <div class="mb-3">
                    <label for="isbn" class="form-label"> ISBN: </label>
                        <input type="number" class="form-control" name="txtisbn" value="{{old('txtisbn')}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtisbn') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label"> Titulo: </label>
                            <input type="text" class="form-control" name="txttitulo" value="{{old('txttitulo')}}">
                            <small class="text-danger fst-italic">{{ $errors->first('txttitulo') }}</small>
                        </div>
                        <div class="mb-3">
                            <label for="Autor" class="form-label"> Autor: </label>
                                <input type="text" class="form-control" name="txtAutor" value="{{old('txtAutor')}}">
                                <small class="text-danger fst-italic">{{ $errors->first('txtAutor') }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="Paginas" class="form-label"> Paginas: </label>
                                    <input type="text" class="form-control" name="txtPaginas" value="{{old('txtPaginas')}}">
                                    <small class="text-danger fst-italic">{{ $errors->first('txtPaginas') }}</small>
                                </div>
                                <div class="mb-3">
                                    <label for="Anio" class="form-label"> Anio: </label>
                                        <input type="text" class="form-control" name="txtAnio" value="{{old('txtAnio')}}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtAnio') }}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Editorial" class="form-label"> Editorial: </label>
                                            <input type="text" class="form-control" name="txtEditorial" value="{{old('txtEditorial')}}">
                                            <small class="text-danger fst-italic">{{ $errors->first('txtEditorial') }}</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="EmailEditorial" class="form-label"> Email de Editorial: </label>
                                                <input type="text" class="form-control" name="txtEmailEditorial" value="{{old('txtEmailEditorial')}}">
                                                <small class="text-danger fst-italic">{{ $errors->first('txtEmailEditorial') }}</small>
                                            </div>
                            
    </div>
    </div>
    <div class="d-grid gap-2 mt-2 mb-1">
        <button type="submit" class="btn btn-secondary btn-sm">Guardar Libro</button>
    </div>
</form>

    @endsection
