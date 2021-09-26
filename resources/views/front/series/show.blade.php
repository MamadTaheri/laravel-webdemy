@extends('layouts.app')

@section('content')

<b-container>
    <section>
        <div class="jumbotron">
            <h1 class="display-4">{{$series->title}}</h1>
            <p class="lead">{{$series->description}}</p>
            <hr class="my-4">
            <a class="btn btn-primary" href="#">Start Series</a>
            <a class="btn btn-success" href="#">Subscribe</a>
        </div>
    </section>

    {{-- {{$series->videos}} --}}

    <section class="mb-3">
        <h3 class="mb-3 text-center">Episodes</h3>

        <episodes :videos="{{$series->videos}}"></episodes>
    </section>

</b-container>



@endsection
