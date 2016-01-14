<?php
/**
 * Created by PhpStorm.
 * User: RObert
 * Date: 1/12/2016
 * Time: 2:29 PM
 */

use Philo\Blade\Blade;

/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 1/13/2016
 * Time: 7:54 AM
 */

/**
 * A function to make it easy to link to blade templates.
 *
 * @param $view
 * @param array|null $array
 * @return mixed
 */
function makeView($view, $array = [])
{
    $viewsPath = __DIR__ . "/app/views";
    $viewsCachePath = __DIR__ . "/app/cache";

    $blade = new Blade($viewsPath, $viewsCachePath);

    echo $blade->view()->make($view, $array)->render();
}

/**
 * A function to locate the assets of the project.
 *
 * @param $path
 * @return string
 */
function assets($path)
{
    return "public/assets" . $path;
}

/**
 * Function to format the Date to a human readable string
 *
 * @param $value
 * @return bool|string
 */
function formatDate($value)
{
    $date_format_string = "d-m-Y";
    $date = date_format($value, $date_format_string);
    return $date;
}

/**
 * @param $array
 * @param $className
 * @param $classNameField
 * @param $question
 */
function getDataField($array, $className, $classNameField, $question)
{
    for ($i = 0; $i < count($array); $i++) {
        // This does not require a network access.
        $detail = $array[$i]->get($className);
        if ($detail != null) {
            echo '<h4 class="list-group-item">' . $question . '</h4>';
            $records = $detail->get($classNameField);
            foreach ($records as $record) {
                echo '<a href="#" class="list-group-item">' . $record . '</a>';
            }
        }
    }
}