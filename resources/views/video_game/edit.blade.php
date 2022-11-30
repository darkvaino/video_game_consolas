@extends('layouts.base')

@section('title', 'Edit | '  )

@section('content')
<article class="container">
    </article>
    <section class="row">
        <h1 class="col alert alert-success text-center">editar video games</h1>
    </section>
    <article class="container">
        <section>
            <form action="/video_game/{{$video_game->id}}" class="row" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 col-6">
                    <label for="reference" class="form-label">reference</label>
                    <input type="text" class="form-control" id="reference" name="reference" value="{{old('reference',$video_game->reference)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="number_of_controllers" class="form-label">number_of_controllers</label>
                    <input type="number" class="form-control" id="number_of_controllers" name="number_of_controllers" value="{{old('number_of_controllers',$video_game->number_of_controllers)}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="is_especial_edition" class="form-label">is_especial_edition</label>
                    <input type="text" class="form-control" id="is_especial_edition" name="is_especial_edition" value="{{old('is_especial_edition',$video_game->is_especial_edition)}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="release_year" class="form-label">release_year</label>
                    <input type="date" class="form-control" id="release_year" name="release_year" value="{{old('release_year',$video_game->release_year)}}">
                </div>

                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Guardar" class="btn btn-success text-center">
                </div>

                <div class="mb-3 col-12 d-grid">
                    <input type="button" onclick="history.back()" name="volver atrás" class="btn btn-success text-center" value="volver atrás">
                </div>

            </form>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
    </article>
@endsection

