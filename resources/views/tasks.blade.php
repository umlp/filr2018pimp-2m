@extends('layouts.app')

@section('content')
    <fieldset>
        <h1>Antisèche</h1>
        <button type="submit">mon profil</button>
    </fieldset>

    <!-- New Task Form -->
    <form action="{{ url('task')}}" method="POST">
    {{ csrf_field() }}
                        
    <div>
        <div>
            <button type="submit">Scanner le cours</button>
            <button type="submit">Diffuser le cours</button>
        </div>
    </div>
                       
    <!-- choose the course -->
    <div>
        <label for="cours" class="col-sm-3 control-label">Cours</label>
        <select name="cours">
            <option value="1">CM Auto ASI3</option>
            <option value="2">CM Capteur ASI3</option>
            <option value="3">CM UML ASI3</option>
        </select>
    </div>
                        <fieldset>
                            <label for="selectionner">Sélectionner vos images (3 max.)</label>
                            <select name="selectionner" size="4" multiple="multiple">
                                <option value="1">Image1</option>
                                <option value="2">Image2</option>
                                <option value="3">Image3</option>
                                <option value="4">Image4</option>
                            </select>
                            <button type="submit">Importer</button>
                        </fieldset>
                            <label for="liste">LISTE DES ETUDIANTS</label>
                            <select name="liste" size="6" multiple="multiple">
                                <option value="1">Etudiant 1</option>
                                <option value="2">Etudiant 2</option>
                                <option value="3">Etudiant 3</option>
                                <option value="4">Etudiant a signalé absence</option>
                                <option value="5">Etudiant 4</option>
                                <option value="6">Etudiant 5</option>
                            </select>
                            <button type="submit">Repérer les absents</button>
                    </form>

@endsection
