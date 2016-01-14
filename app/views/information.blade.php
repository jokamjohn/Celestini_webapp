@extends("app")

@section("content")
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Village</th>
        </tr>
        </thead>
        <tbody>

        @foreach($results as $result)
            <tr>
                <td>
                    <a href="person.php?id={{ $result->getObjectId() }}">{{ $result->get(\app\Constant::$KEY_FIRST_NAME) }}</a>
                </td>
                <td>{{$result->get(\app\Constant::$KEY_LAST_NAME)}}</td>
                <td>{{$result->get("Village")}}</td>
            </tr>
        @endforeach
    </table>

@endsection