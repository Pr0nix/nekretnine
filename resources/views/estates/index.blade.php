@extends ('layouts.layout')

@section ('content')

<html>
    <body>
        <main role="main">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading"> {{ $name }}</h1>
                    <p class="lead text-muted">Kod nas samo najbolje mozete naci preko 500000 ponuda na raznim lokacijama sirom crne gore.</p>
                </div>
            </section>
        
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        @foreach ($estates as $estate)
                            @include ('estates.estate')
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

@endsection