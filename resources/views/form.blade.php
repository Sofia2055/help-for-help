<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <style>
        .inputText{
    color: black;
    font-size: large;
}
    </style>
    <link rel="icon" href="img/logo-k.png">
    
    <title>EXPO 2022</title>
</head>
<body>

    <h1>Formulario Help 4 Help</h1>

    <form method="post" action="{{ url('/create/resource') }}" enctype="multipart/form-data"> 
        @csrf
        <label for="dni" class="inputText">1. Nombre completo  </label><br>
        <input type="text" id="Nombre completo" placeholder="Pon tu nombre" name="product_name" value="{{ old('product_name') }}"><br>
        @error('product_name')
        {{ $message }}<br>
        @enderror

        <label for="dni" class="inputText">2. Direccion de correo electronico</label><br>
        <input type="text" id="E-mail" placeholder="Pon tu correo electronico"><br>
        <label>3. Descripción del recurso </label><br>
        <input type="text" name="description"><br>
        @error('description')
        {{ $message }}<br>
        @enderror
        <label>4. ¿Cual es el estado del recurso</label><br>
        <input type="radio" name="state" value="Nuevo">Nuevo<br>
        <input type="radio" name="state">Usado como nuevo<br>
        <input type="radio" name="state">Usado<br>
        @error('state')
        {{ $message }}<br>
        @enderror
        <label>5. Cantidad</label><br>
        <input type="number" name="resources_quantity"><br>
        @error('resources_quantity')
        {{ $message }}<br>
        @enderror
        <label>6. Adjunte fotos del recurso </label><br>
        <input type="file" name="photos"><br>
        <label>7.Elija su Centro Supérate </label><br>
        <input type="radio" value="1" name="center_id">Centro ¡Supérate! Merlet<br>
        <input type="radio">Centro ¡Supérate! Hilasal<br>
        <input type="radio">Centro ¡Supérate! Grupo Q<br>
        <input type="radio">Centro ¡Supérate! ADOC<br>
        <input type="radio">Centro ¡Supérate! Raíces<br>
        <input type="radio">Centro ¡Supérate! Fundación Poma<br>
        <input type="radio">Autorizo al Centro !Superate! a utilizar la informacion anteriormente brindada para ser publicada en la pagina de "Help For Help".<br>
        @error('center_id')
        {{ $message }}<br>
        @enderror
        <a href="01.html">« Volver</a>

        @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif





        <input type="submit">


    </form>

</body>
</html>