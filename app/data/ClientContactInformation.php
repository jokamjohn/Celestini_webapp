<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 1/12/2016
 * Time: 11:57 PM
 */

namespace app\data;


use app\Constant;
use Parse\ParseObject;
use Parse\ParseQuery;

class ClientContactInformation extends ParseObject
{
    public static $parseClassName = "ClientContactInformation";

    public function setFirstName($firstName)
    {
        $this->set(Constant::$KEY_FIRST_NAME, $firstName);
    }

    public function setLastName($lastName)
    {
        $this->set(Constant::$KEY_LAST_NAME, $lastName);
    }

    public function setOccupation($occupation)
    {
        $this->set(Constant::$KEY_OCCUPATION, $occupation);
    }

    public function getFirstName()
    {
        $this->get(Constant::$KEY_FIRST_NAME);
    }

    public function getLastName()
    {
        $this->get(Constant::$KEY_LAST_NAME);
    }

    public function getOccupation()
    {
        $this->get("Occupation");
    }

    public function getQuery()
    {
        $query = new ParseQuery(Constant::$CLIENT_CONTACT_INFO_CLASS_NAME);
//        $query->equalTo(Constant::$KEY_FIRST_NAME, $firstName);
        $query->descending("createdAt");
        $results = $query->find();
        return $results;
    }
}