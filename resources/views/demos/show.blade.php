@extends('layouts.app')
@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="car p-4">
                <p>Name: <b>{{$demo->name}}</b></p>
                <p>Description: <b>{{$demo->description}}</b></p>
                <p>Image:
                    <img src="/demos/{{$demo->image}}" class="rounded" width="100%" />

                </p>
            </div>
        </div>
    </div>
</div>

@endsection