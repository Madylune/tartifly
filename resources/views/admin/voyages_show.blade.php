@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $voyage->label }}</div>
                <div class="panel-body">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                        <div class="" style="display: flex;">
                            <div>
                                <img src="{{ $voyage->picture }}" alt="picture" height="200px"/>
                            </div>
                            <div class="desc" style="background-color: white; border-radius: 25px; padding: 0 20px 10px;">
                                <h2>{{ $voyage->label }}</h2>
                                <span class="city">{{ $voyage->country }}, {{ $voyage->city }}</span>
                                <p>{{ $voyage->description }}</p>
                                <p style="font-weight: bold;">{{ ($voyage->description === 0) ? 'Pas disponible' : 'Disponible'}}</p>
                                <div style="font-size: 10px;">
                                    Créé le {{ $voyage->created_at }}
                                    <br/>
                                    Edité le {{ $voyage->updated_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center; ">
                        <form class="form-horizontal" method="POST" action="{{ route('voyages.edit', $voyage->id) }}">
                            @csrf
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Editer
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" method="POST" action="{{ route('voyages.destroy', $voyage->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection