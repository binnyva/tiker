<?php
$html = new HTML;

$template->addResource('libraries/check.js','js');

$template->addResource('libraries/calendar.js','js');
$template->addResource('libraries/calendar.css','css');
$template->addResource('task/form.js','js');

$status_list = array('working'=>'Working', 'scheduled'=>'Scheduled', 'suspended'=>'Suspended', 'done'=>'Done', );
$type_list = array('recurring'=>'Recurring','once'=>'Once','scheduled'=>'Scheduled',);

$project_list = $sql->getById("SELECT id,name FROM Project WHERE user_id=$_SESSION[user_id]");
$project_list[0] = 'Misc';