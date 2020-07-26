<?php
$applications = ['index'];
foreach($applications as $app_path){
	include __DIR__.DIRECTORY_SEPARATOR.$app_path.DIRECTORY_SEPARATOR."router.php";
}

