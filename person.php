<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 1/13/2016
 * Time: 10:09 PM
 */
use app\Constant;
use Parse\ParseQuery;

require 'vendor/autoload.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = new ParseQuery(Constant::$CLIENT_CONTACT_INFO_CLASS_NAME);
    $query->equalTo(Constant::$KEY_OBJECT_ID, $id);
    $query->includeKey(Constant::$KEY_HEALTH_CHECK_INFORMATION);
    $query->includeKey(Constant::$KEY_HEALTH_YES_NO);
    $query->includeKey(Constant::$KEY_HEALTH_STRUCTURED);
    $details = $query->find();

    makeView("person", compact("details"));
}
//for ($i = 0; $i < count($details); $i++) {
//    // This does not require a network access.
//    $record = $details[$i]->get(Constant::$KEY_HEALTH_CHECK_INFORMATION);
//    if($record != null){
//        var_dump($record->get("HasDiseases"));
//    }
//}
