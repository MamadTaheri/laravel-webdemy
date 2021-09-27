@extends('layouts.app')

@section('content')

    <b-container>
    <b-breadcrumb :items="{{json_encode($breadCrumbs)}}">salam</b-breadcrumb>

        <section class="mb-5">
            <div>
                <b-row>
                    @foreach ($series as $s)
                    <b-col cols="4" class="text-center">
                        <b-card title={{ $s->id . "_" . $s->title }} class="card-img-fix"
                            img-src="{{ $s->image ? asset('storage/'.$s->image) : asset('images/s21.jpg')}}"
                            img-alt="Image" img-top>
                            <b-card-text> {{ \Str::words($s->description, 10)  }} </b-card-text>
                            <template justify="center" #footer>
                                <b-button href="{{route('series.show', $s->title)}}" variant="primary">Play</b-button>
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
