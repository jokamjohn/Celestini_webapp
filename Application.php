<?php
/**
 * Created by PhpStorm.
 * User: RObert
 * Date: 1/12/2016
 * Time: 2:27 PM
 */

require 'vendor/autoload.php';

use app\data\ClientContactInformation;
use app\data\HealthCheckQuestion;
use Parse\ParseClient;

//Register the classes here
ClientContactInformation::registerSubclass();
HealthCheckQuestion::registerSubclass();

ParseClient::initialize('psgc5CNy7Ig1NBmLPpnzD4Xux2ENTrKrdQwVyyEc', 'O8cvWjsVWg14LjOiZSkvESaYmZfw9GnrerRaGhSO', 'vdgXHNHxVydqWsO53jBNgBxPz1Mt9cc2I2OTF5Z1');
