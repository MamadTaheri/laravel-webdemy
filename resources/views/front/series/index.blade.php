@extends('layouts.app')

@section('content')

    <b-container>

        <section class="mb-5">
            <div>
                <b-row>
                    @foreach ($series as $s)
                    <b-col cols="4">
                        <b-card title={{ $s->title }} img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
                            <b-card-text> {{ \Str::words($s->description, 10)  }} </b-card-text>
                            <template #footer>
                                {{-- <b-button href="{{ route('series.show', $s) }}" variant="primary">Play</b-button> --}}
                           </template>
                        </b-card>
                    </b-col>

                    @endforeach
                </b-row>
            </div>
        </section>

        <section>
            <pricing></pricing>
        </section>



    </b-container>





@endsection
