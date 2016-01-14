@extends("app")

@section("title", "Home")


@section("content")

    <div class="jumbotron">
        <h1>Hello, John</h1>
        <p>Welcome to Celestini Web app</p>
        <p><a class="btn btn-primary btn-lg" href="data.php" role="button">Learn more</a></p>
    </div>

    <p>The current unix time is {{ time() }}</p>


    @endsection