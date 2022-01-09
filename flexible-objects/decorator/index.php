<?php

namespace zhang;

/*
    Filter +check()
    RealNameFilter
    BlackListFilter
    Main()
*/
require_once('Request.php');
require_once('Filter.php');
require_once('FilterDecorator.php');
require_once('Main.php');
require_once('BlackListFilter.php');
require_once('RealNameFilter.php');

// $filter = new RealNameFilter();
// $filter->check(new Request());

// $filter = new BlackListFilter();
// $filter->check(new Request());

// $filter = new Main();
// $filter->check(new Request());

$filter = new RealNameFilter(new BlackListFilter(new Main()));
$filter->check(new Request());
