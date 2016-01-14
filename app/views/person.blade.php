@extends("app")

@section("content")

    <div class="panel panel-primary">
        <div class="panel-heading">Client Contact Information</div>
        <div class="panel-body">
            {{--Panel content--}}
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Village</th>
                    <th>District</th>
                    <th>Date of birth</th>
                </tr>
                </thead>
                <tbody>

                @foreach($details as $detail)
                    <tr>
                        <td>{{$detail->get(\app\Constant::$KEY_FIRST_NAME) }}</td>
                        <td>{{$detail->get(\app\Constant::$KEY_LAST_NAME)}}</td>
                        <td>{{$detail->get("Village")}}</td>
                        <td>{{$detail->get(\app\Constant::$KEY_DISTRICT)}}</td>
                        @if($detail->get(\app\Constant::$KEY_DATE_OF_BIRTH) != null)
                        <td>{{formatDate($detail->get(\app\Constant::$KEY_DATE_OF_BIRTH))}}</td>
                            @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    {{--second panel--}}
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Health Check Information</h3>
        </div>
        <div class="panel-body">

            <ul class="list-group">
                <?php
                for ($i = 0; $i < count($details); $i++) {
                    // This does not require a network access.
                    $detail = $details[$i]->get(\app\Constant::$KEY_HEALTH_CHECK_INFORMATION);
                    if ($detail != null) {
                        echo '<h4 class="list-group-item">She has the following Disease</h4>';
                        $records = $detail->get(\app\Constant::$KEY_HAS_DISEASES);
                        foreach ($records as $record) {
                            echo '<li class="list-group-item">' . $record . '</>';
                        }
                    }
                }
                ?>
            </ul>

            <ul class="list-group">

                <?php
                for ($i = 0; $i < count($details); $i++) {
                    // This does not require a network access.
                    $detail = $details[$i]->get(\app\Constant::$KEY_HEALTH_CHECK_INFORMATION);
                    if ($detail != null) {
                        echo '<h4 class="list-group-item">She is on the following Drugs</h4>';
                        $records = $detail->get(\app\Constant::$KEY_ON_DRUGS);
                        foreach ($records as $record) {
                            echo '<li class="list-group-item">' . $record . '</li>';
                        }
                    }
                }
                ?>
            </ul>

            <div class="list-group">

                <?php
                for ($i = 0; $i < count($details); $i++) {
                    // This does not require a network access.
                    $detail = $details[$i]->get(\app\Constant::$KEY_HEALTH_CHECK_INFORMATION);
                    if ($detail != null) {
                        echo '<h4 class="list-group-item">History of preeclampsia</h4>';
                        $records = $detail->get(\app\Constant::$KEY_PREECLAMPSIA);
                        foreach ($records as $record) {
                            echo '<li class="list-group-item">' . $record . '</li>';
                        }
                    }
                }
                ?>
            </div>

            <ul class="list-group">

                <?php
                for ($i = 0; $i < count($details); $i++) {
                    // This does not require a network access.
                    $detail = $details[$i]->get(\app\Constant::$KEY_HEALTH_CHECK_INFORMATION);
                    if ($detail != null) {
                        echo '<h4 class="list-group-item">Last Menstruation Date</h4>';
                        $records = formatDate($detail->get(\app\Constant::$KEY_MENSTRUATION_DATE));

                        echo '<li class="list-group-item">' . $records . '</li>';

                    }
                }
                ?>

            </ul>

        </div>
    </div>

    {{--Third panel--}}

    <div class="panel panel-primary">
        <div class="panel-heading">Health Yes No</div>
        <div class="panel-body">
            {{--Panel content--}}

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>HypertensionHistory</th>
                    <th>Cesarean</th>
                    <th>Diabetic</th>
                    <th>HypertensiveBeforePregnancy</th>
                    <th>ChronicRenal</th>
                    <th>Thyroid</th>
                    <th>SickleCell</th>
                    <th>MultipleGestation</th>
                    <th>Gestation</th>
                </tr>
                </thead>
                <tbody>

                <?php
                for ($i = 0; $i < count($details); $i++) {
                    // This does not require a network access.
                    $detail = $details[$i]->get(\app\Constant::$KEY_HEALTH_YES_NO);
                    if ($detail != null) {
                        echo '<tr>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_HYPER_HISTORY) . '</td>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_CESAREAN) . '</td>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_DIABETIC) . '</td>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_HYPER_BEFORE_PREGNANCY) . '</td>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_CHRONIC_RENAL) . '</td>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_THYROID) . '</td>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_SICKLE_CELL) . '</td>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_MULTIPLE_GESTATION) . '</td>';
                        echo '<td>' . $detail->get(\app\Constant::$KEY_GESTATION) . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>

    {{--Panel four--}}


@endsection