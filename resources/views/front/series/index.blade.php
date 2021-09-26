@extends('layouts.app')

@section('content')

    <b-container>

        <section class="mb-5">
            <div>
                <b-row>
                    @foreach ($series as $s)
                    <b-col cols="4" class="text-center">
                        <b-card title={{ $s->title }} img-src="{{asset('images/s21.jpg')}}" img-alt="Image" img-top>
                            <b-card-text> {{ \Str::words($s->description, 10)  }} </b-card-text>
                            <template justify="center" #footer>
                                <b-button href="{{route('series.show', $s->id)}}" variant="primary">Play</b-button>
                           </template>
                        </b-card>
                    </b-col>

                    @endforeach
                </b-row>
            </div>
        </section>

        <section>
            <h3 class="mb-3 text-center">Choose Plan that fits your need</h3>
            <pricing></pricing>
        </section>



    </b-container>





@endsection
