@extends('layouts.app')

@section('content')

<html>
    <body>
        <main role="main">

            <section class="jumbotron text-center">
                <div class="container">
                <h1 class="jumbotron-heading"> {{ $name }}</h1>
                <p class="lead text-muted">Kod nas samo najbolje mozete naci preko 500000 ponuda na raznim lokacijama sirom crne gore.</p>
                <p>
                    <a href="/estates" class="btn btn-primary my-2">GO TO NEKRETNINE</a>
                </p>
                </div>
            </section>
        
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

@endsection
