@extends('layouts.base')

@section('title') video_game list @endsection

@section('content')
<article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">video games</h1>
        </section>
    </article>
    <article class="container">
        <section class="row">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>reference</th>
                        <th>number_of_controllers</th>
                        <th>is_especial_edition</th>
                        <th>release_year</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Show</th>
                    </tr>
                    </thead>
                    <tbdody>
                        <!--es el mismo nombre 1 en videocontroller-->
                        @foreach($video_game as $videogame)
                            <tr>
                                <td>{{$videogame->id}}</td>
                                <td>{{$videogame->reference}}</td>
                                <td>{{$videogame->number_of_controllers}}</td>
                                <td>{{$videogame->is_especial_edition}}</td>
                                <td>{{$videogame->release_year}}</td>
                                <td><a href="/video_game/{{$videogame->id}}/edit" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="/video_game/{{$videogame->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input
                                            type="submit"
                                            value="Delete"
                                            class="btn btn-danger"
                                            onclick="return confirm('Are you sure ?')"
                                        >
                                    </form>
                                <td><a href="/video_game/{{$videogame->id}}" class="btn btn-warning">Show</a></td>

                                </td>
                            </tr>
                        @endforeach
                    </tbdody>
                </table>
            </div>
        </section>
        <section class="row">
            <div class="col d-grid">
                <a href="/video_game/create" class="btn btn-success text-center">Create new video gamen</a>
            </div>
        </section>
    </article>
@endsection
