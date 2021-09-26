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

    <section class="mb-3">
        <h3 class="mb-3 text-center">Episodes</h3>

        <b-card no-body class="overflow-hidden mb-2">

            <b-row no-gutters>
                <b-col md="2">
                    <b-button>1</b-button>
                </b-col>
                <b-col md="10">
                    <b-card-body title="video.title">
                        <b-card-text>
                            some description
                        </b-card-text>
                    </b-card-body>
                </b-col>
            </b-row>
        </b-card>
        
        <b-card no-body class="overflow-hidden mb-2">

            <b-row no-gutters>
                <b-col md="2">
                    <b-button>1</b-button>
                </b-col>
                <b-col md="10">
                    <b-card-body title="video.title">
                        <b-card-text>
                            some description
                        </b-card-text>
                    </b-card-body>
                </b-col>
            </b-row>
        </b-card>


    </section>

</b-container>



@endsection
