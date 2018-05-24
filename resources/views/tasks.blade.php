@extends('layouts.app')

@section('content')
    <div class="title">
        <img class="logoApp" src="logo INSA Rouen.jpg" alt="logo" width="60" heigth="120" />
        <h1>Antisèche</h1>
        <img class="ImageProfil" src="filr2018pimp-2m/resources/views/powerpuffs_image.png" alt="Image profil" width="60" heigth="30" />
        <button type="submit" class="profil">mon profil</button>
    </div>

    <!-- New Task Form -->
    <form action="{{ url('task')}}" method="POST">
    {{ csrf_field() }}
                        
    <br/>
    <div>
        <button type="submit" class="casegris">Scanner le cours</button>
        <button type="submit" class="casegris">Diffuser le cours</button>
    </div>
                       
    <!-- choose the course -->
    <br/>
    <div class="listeCours">
        <label for="cours">Cours  </label>
        <select name="cours">
            <option value="1">CM Auto ASI3</option>
            <option value="2">CM Capteur ASI3</option>
            <option value="3">CM UML ASI3</option>
        </select>
    </div>
    
    <br/>
    <div class="selectImage">
        <label for="selectionner" class="textselect">Sélectionner vos images (3 max.)</label>
        <br/>
        <select name="selectionner" size="4" multiple="multiple" class="selectionner">
            <option value="1">Image1</option>
            <option value="2">Image2</option>
            <option value="3">Image3</option>
            <option value="4">Image4</option>
        </select>
        </br>
        <input type="file" name="maPhoto" value="Importer" class="button_importer">
    </div>
    
    <br/>
    <div class="liststudents">
        <label class="titleListStudent" for="liste">LISTE DES ETUDIANTS</label>
        <br/>
        <select name="liste" size="6" multiple="multiple">
            <option value="1">Etudiant 1</option>
            <option value="2">Etudiant 2</option>
            <option value="3">Etudiant 3</option>
            <option value="4">Etudiant a signalé absence</option>
            <option value="5">Etudiant 4</option>
            <option value="6">Etudiant 5</option>
        </select>
        </br>
        <button type="submit" class="button">Repérer les absents</button>
    </div>
    </form>

@endsection
