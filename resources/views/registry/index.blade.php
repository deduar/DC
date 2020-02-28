@extends('layout')

@section('content')
<div class="col-sm-12">
    <p><h4 style="text-align: center;">Docker es una plataforma completa de manejo de contenedores.</h4></p>
    <p><h5 style="margin-left: 5px; margin-right: 5px; text-align: center;">A lo largo de este curso aprenderás qué es Docker, por qué usarlo y te introducirás en el manejo de dichos contenedores con ejemplos prácticos que te guían a través del mundo del manejo de aplicaciones con contenedores.</h5></p>
</div>
<hr>
<div class="container">
    <div class="row ">
        <div class="col-sm-8 offset-sm-1">
        <form action="/" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name" style="color: #b21018;">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Tu Nombre (Requerido)" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email" style="color: #b21018;">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Tu dirección de Coreo (Requerido)" required>
                    </div>
                </div>
            </div>
            <hr>
            <h4 style="text-align: center;">Lo siguientes campos no son obligatorios,</h4> 
            <h5 style="text-align: center;">pero si los completas nos ayudas a ofrecerte un mejor taller</h5>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="mobil">Teléfono</label>
                        <input type="text" class="form-control" name="mobil" placeholder="Tu númerio de teléfono">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="horario">Horario</label>
                        <select class="form-control" name="horario">
                            <option value="0">En que horario prefieres asistir al taller</option>
                            <option value="1">Mañana [Entre : 07:00 - 13:00]</option>
                            <option value="2">Tarde  [Entre : 13:00 - 18:00]</option>
                            <option value="3">Noche  [Entre : 18:00 - 20:00]</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="localidad">Localidad</label>
                        <select class="form-control" name="localidad">
                            <option value="0">Donde te es más comodo tomar el taller</option>
                            <option value="1">Pontevedra</option>
                            <option value="2">Vigo</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="lenguaje">Lengaje</label>
                        <select class="form-control" name="lenguaje">
                            <option value="0">En que lenguaje desarrollas normalmente</option>
                            <option value="1">PHP (Laravel, Symfony, CodeIgniter ...)</option>
                            <option value="2">Java (Spring, JEE)</option>
                            <option value="3">NodeJS</option>
                            <option value="4">Python (DJango, Flask)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="so">Sistema Operativo</label>
                        <select class="form-control" name="so">
                            <option value="0">En que lSistema Operativo trabajas</option>
                            <option value="1">GNU/Linux</option>
                            <option value="2">Microsoft Windows</option>
                            <option value="3">MAC OS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 offset-sm-2">
                    <div class="form-group" style="margin-top: 30px;">
                        <button type="submit" class="btn btn-primary">Registrate</button>
                    </div>
                </div>
            </div>
            
        </form>
        </div>
    </div>
</div>
<hr>
<div class="col-sm-8 offset-sm-2">
    <h3>Contenido</h3>
    <table class="table table-striped">
      <tbody>
        <tr>
          <th scope="row">1.- Introducción</th>
          <th scope="row">2.- Contenedores</th>
        </tr>
        <tr>
          <th scope="row">3.- Volúmenes</th>
          <th scope="row">4.- Imágenes</th>
        </tr>
         <tr>
          <th scope="row">5.- Redes</th>
          <th scope="row">6.- Docker machine</th>
        </tr>
         <tr>
          <th scope="row">7.- Docker Compose</th>
           <th scope="row">8.- Orquestadores</th>
        </tr>
      </tbody>
    </table>
</div>
<hr>
<div class="row">
    <div class="col-sm-2 offset-sm-2" >
      <img src="dist/img/CH.png" class="img-circle " alt="User Image">
    </div>
    <div class="col-sm-6 offset-sm-1">
        <a href="#" class="d-block">Eduardo Diez</a>
        <p>Ingeniero en desarrollo de software.</p>
        <p>Apasionado por el desarrollo web </p> 
        <p>y sobre todo por DevOps</p>
    </div>
</div>
@endsection

