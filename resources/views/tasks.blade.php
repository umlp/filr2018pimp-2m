@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Antisèche
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>mon profil
                    </button>
                </div>
                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Scanner le cours
                                </button>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Diffuser le cours
                                </button>
                            </div>
                        </div>
                       
                       <!-- choose the course -->
                        <div class="form-group">
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
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
