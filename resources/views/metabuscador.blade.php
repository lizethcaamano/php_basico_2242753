<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <form method ="POST" action="{{url('buscar_termino')}}" class="form-horizontal">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Realizar Busquedas</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">1. Ingrese el termino de búsqueda </label>
          <div class="col-md-4">
          <input id="motores-1" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2. Seleccione el motor de búsqueda</label>
          <div class="col-md-4">
            <label class="radio-inline" for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">Google</label>
            <label class="radio-inline" for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">Bing</label>
            <label class="radio-inline" for="motores-2">
              <input type="radio" name="motores" id="motores-2" value="3">Youtube</label>
            <label class="radio-inline" for="motores-3">
              <input type="radio" name="motores" id="motores-3" value="4">LinkedIn</label> <br>
            <label class="radio-inline" for="motores-4">
              <input type="radio" name="motores" id="motores-4" value="5">Twitter</label>
            <label class="radio-inline" for="motores-5">
              <input type="radio" name="motores" id="motores-5" value="6">Google Académico</label>
            <label class="radio-inline" for="motores-6">
              <input type="radio" name="motores" id="motores-6" value="7">PicSearch</label> <br>
            <label class="radio-inline" for="motores-7">
              <input type="radio" name="motores" id="motores-7" value="8">Google Books</label>
            <label class="radio-inline" for="motores-8">
              <input type="radio" name="motores" id="motores-8" value="9">Amazon</label>
            <label class="radio-inline" for="motores-9">
              <input type="radio" name="motores" id="motores-9" value="10">Linio</label>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
              <button id="" name="" class="btn btn-info">Buscar</button>
            </div>
          </div>

        </fieldset>
        </form>

</body>
</html>
