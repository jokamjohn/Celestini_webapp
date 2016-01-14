<h1>Hello John</h1>
<h2>Details from parse.com</h2>

@foreach($results as $result)
    <li>{{ $result->get(\app\Constant::$KEY_FIRST_NAME) . ' - ' . $result->get(\app\Constant::$KEY_LAST_NAME)}} </li>
@endforeach
