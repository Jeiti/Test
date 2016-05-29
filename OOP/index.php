<?php
/**
 * Created by PhpStorm.
 * User: evgen
 * Date: 29.05.16
 * Time: 8:52
 */
require_once ("Company.php");

$company = new Company();
$programmer = new Programmer("vasya", ["php"]);
$webDesigner = new WebDesigner("masha",["gimp"]);

$company->employ($programmer);
$company->employ($webDesigner);
echo $company;
//print_r($company->employees);
//TODO:ДЗ - Создать freelanceCompany которая будет трудоустраивать только тех, кто может работать удаленно, а так же посмотреть исключения, 