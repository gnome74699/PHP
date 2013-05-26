<?php
$action = '';
$database = 'test_bos_menu_inte';
$userBDD = 'root';
$pwdBDD = '';


if(array_key_exists("action", $_GET)) {
	$action = $_GET["action"];
}else{
	if(array_key_exists("action", $_POST)) {
		$action = $_POST["action"];
	}
}


if( $action == '') {

} else if( strcmp($action, "getIncident") == 0) {
	getIncident($database,$userBDD,$pwdBDD);
}


function getIncident($database,$userBDD,$pwdBDD) {

	$mysqli = new mysqli("localhost", $userBDD, $pwdBDD, $database);
	if ($mysqli->connect_errno) {
	    echo json_encode("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
	}
	else {
	
		$res = $mysqli->query("SELECT COUNT(id) as count FROM interruptions");
		$row = $res->fetch_assoc();
		echo json_encode(array('mysqli' => $mysqli->host_info, 'count' => $row['count']));
	}
}

?>

