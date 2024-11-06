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
  title: "Increible men!",
  text: "Gud job",
  icon: "XD"
});
    </script>
    @endsession

    <form action='/registroPrenda' method="POST">
        <div class="mb-3">
            <label for="Prenda" class="form-label"> Prenda: </label>
            <input type="text" class="form control" name="txtprenda" value="{{old('txtprenda')}}">
            <small class="text-danger fst-italic">{{$errors->first('txtprenda')}}</small>
        </div>

        <div class="mb-3">
            <label for="Color" class="form-label"> Color: </label>
            <input type="text" class="form control" name="txtcolor" value="{{old('txtcolor')}}">
            <small class="text-danger fst-italic">{{$errors->first('txtcolor')}}</small>
        </div>

        <div class="mb-3">
            <label for="Cantidad" class="form-label"> Cantidad: </label>
            <input type="text" class="form control" name="txtcantidad" value="{{old('txtcantidad')}}">
            <small class="text-danger fst-italic">{{$errors->first('txtcantidad')}}</small>
        </div>

        <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn">Guardar Prenda</button>
        </div>
    </form>


</body>
</html>