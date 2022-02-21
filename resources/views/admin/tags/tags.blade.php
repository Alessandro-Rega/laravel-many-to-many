@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header mb-4">
                <a href="{{route('tags.create')}}"><button type="button" class="btn btn-success">Crea Categoria</button></a>
            </div>
            <div class="card-header">
                <span>Categories</span>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <th scope="row">{{$tag->id}}</th>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->slug}}</td>
                        <td><a href="{{route('tags.show', $tag->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
                    </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection