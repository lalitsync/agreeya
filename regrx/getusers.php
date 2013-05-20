<?php

$str= $_REQUEST['string'];

$needle1 ='(';
$needle2 =')';

$result = array('status'=> '' , 'data' => array());
preg_match_all('/' . preg_quote($needle1, '/') . '([^\|\s|)]+)'. preg_quote($needle2, '/').'/iu', $str,$Res);


if(count($Res)>=1) {

echo "<ul>";
		foreach($Res[1] as $ResStr)
		{
			echo "<li><label>valid String </label><label>  : ".$ResStr.' </label></li>';

		}

	echo '</ul>';

}

// $result = json_encode($result);

// var_dump($result);
?>
