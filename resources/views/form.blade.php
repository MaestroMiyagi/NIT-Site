@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <p>Control escolar</p>
        <body>
    <h1 id="title">Registro de usuarios</h1>
    <p id="description">Ingrese la información y los documentos que se le solicita</p>
    <form action="" id="survey-form">
        <fieldset>
            <section class="datos">
                <label for="name" id="name-label">
                    Introduzca su(s) nombre(s) <input type="text" id="name" required placeholder="Juan">
                </label>
                <label for="lname1" id="lname1-label">
                    Introduzca su apellido paterno <input type="text" id="lname1" required placeholder="Gonzales">
                </label>
                <label for="lname2" id="lname2-label">
                    Introduzca su apellido materno <input type="text" id="lname2" required placeholder="Sánchez">
                </label>
                <label for="curp" id="curp">
                    Introduzca su CURP <input type="text" id="curp" required placeholder="GOSJ801124...">
                </label>
                <label for="curp-file">Suba su CURP: <input id="curp-file" type="file" name="file" required/>
                </label>
                <hr>
                <label for="referrer"> What's your occupation?
                    <select name="referrer" id="dropdown">
                        <option value="">(select one)</option>
                        <option value="1">Full time job</option>
                        <option value="2">Part time job</option>
                        <option value="3">Student</option>
                        <option value="4">Other</option>
                        <option value="5">Prefer not to say</option>
                    </select>
                </label>
            </section>
            
            <hr>
            <label for="">
                Do you like this survey form?
                <label for="opinion"><input type="radio" name="like" id="opinionyes" class="inline" value="1">Yes</label>
                <label for="opinion"><input type="radio" name="like" id="opinionno" class="inline" value="2">No</label>
                <label for="opinion"><input type="radio" name="like" id="opinionnotsure" class="inline" value="2">Not sure</label>
            </label>
            <hr>
            <label for=""> Tell us your interest
                <label for="technology"></label><input id="technology" type="checkbox" name="interest" value="technology" class="inline" checked> Technology</label>
                <label for="sports"></label><input id="sports" type="checkbox" name="interest" value="sports" class="inline"> Sports</label>
                <label for="art"></label><input id="art" type="checkbox" name="interest" value="art" class="inline"> Art</label>
                <label for="videogames"></label><input id="videogames" type="checkbox" name="videogames" value="videogames" class="inline"> Videogames</label>
                <label for="others"></label><input id="others" type="checkbox" name="others" value="others" class="inline"> Others</label>
            </label>
            <hr>
            <label for="bio">
                Give us a comment:
                <textarea name="bio" id="bio" cols="30" rows="3" placeholder="I like the colors of the page..."></textarea>
            </label>
        </fieldset>
        <input type="submit" value="Submit" id="submit">
    </form>
</body>
@endsection
