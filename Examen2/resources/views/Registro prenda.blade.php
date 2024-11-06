<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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

    <form action='/registroPrenda' method="POST">
        @csrf
        <div class="mb-3">
            <label for="Prenda" class="form-label"> Prenda: </label>
            <input type="text" class="form control" name="txtprenda" value="{{old('txtprenda')}}">
            <small class="text-danger fst-italic">{{$errors->first('txtprenda')}}</small>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label"> Color: </label>
            <input type="text" class="form control" name="txtcolor" value="{{old('txtcolor')}}">
            <small class="text-danger fst-italic">{{$errors->first('txtcolor')}}</small>
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label"> Cantidad: </label>
            <input type="num" class="form control" name="txtcantidad" value="{{old('txtcantidad')}}">
            <small class="text-danger fst-italic">{{$errors->first('txtcantidad')}}</small>
        </div>

        <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-secondary btn-sm">Guardar Prenda</button>
        </div>
    </form>


</body>
</html>