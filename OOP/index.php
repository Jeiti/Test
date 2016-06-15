<?php
require_once ("config.php");
ini_set("error_reporting",E_ALL);
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);

$company = new Company();
$programmer = new Programmer("vasya", ["php"]);
$webDesigner = new WebDesigner("masha",["gimp"]);
$manager = new Manager("Petr");

$company->employ($programmer);
$company->employ($webDesigner);
$company->employ($manager);
echo $company;

//TODO:ДЗ - Создать freelanceCompany которая будет трудоустраивать только тех, кто может работать удаленно, а так же посмотреть исключения,

$freelancecompany = new FreelanceCompany();
$udalenniyprogrammer = new FreelanceProgrammer("Sasha", ["php","mysql","jquery"], 19);
$freelancecompany->ustroitNaRabotu($udalenniyprogrammer);
echo $freelancecompany;