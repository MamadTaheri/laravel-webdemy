@extends('layouts.app')

@section('content')

    <div class="container">
        <section>
            <div class="jumbotron">
                <h1 class="display-4">Online series</h1>
                <p class="lead">Ir Dev Progs</p>
                <hr class="my-4">
                <p>Learn with state-of-the-art online courses</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="{{route('series.index')}}" role="button">Browse Courses</a>
                </p>
              </div>
        </section>

        <section>
            <div>
                <b-card-group deck>
                    @foreach ($featuredSeries as $series)
                         <b-card title={{ $series->title }} img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
                            <b-card-text> {{ \Str::words($series->description, 10, '...')  }} </b-card-text>
                            <template #footer>
                                 <small class="text-muted">Last updated 3 mins ago</small>
                            </template>
                         </b-card>
                    @endforeach



                </b-card-group>
              </div>
        </section>

        <section>
            <pricing></pricing>
        </section>







    </div>

@endsection
