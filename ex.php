<?php

use Acme\users\Person;
use Acme\Business;
use Acme\Staff;

$caylin = new Person('Cayiln James');
$staff = new Staff([$caylin]);
$lougeek = new Business($staff);
$lougeek->hire(new Person('Jane Doe'));

var_dump($lougeek->getStaffMembers());