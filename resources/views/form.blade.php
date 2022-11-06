@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <p>Control escolar</p>
        <body>
    <h1>Registro de usuarios</h1>
    <p>Ingrese la información y los documentos que se le solicita</p>
    <form action="https://getform.io/f/652d958c-94e0-43f7-8473-9917f35e0eaf" method="POST" enctype="multipart/form-data">
       <div class="group-form">
            <label for="nameInput">Nombre</label>
            <input type="text" name="name">
       </div>
       <div class="group-form">
            <label for="1lastnameInput">Apellido Paterno</label>
            <input type="text" name="1lastnameInput">
       </div>
       <div class="group-form">
            <label for="2lastnameInput">Apellido Materno</label>
            <input type="text" name="2lastnameInput">
       </div>
       <div class="group-form">
            <label for="curpInput">CURP</label>
            <input type="text" name="curpInput">
       </div>
       <div class="group-form">
            <label for="curpFileInput">Suba su CURP</label>
            <input type="file" name="curpFileInput">
       </div>
        <button type="submit">Send</button>
    </form>
</body>
@endsection

