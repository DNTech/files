<?php

	if( !isset($_POST["POST_TYPE"]) ){
		exit("INVALID_MODULE_REQUEST");
	}

	$POST_TYPE = $_POST["POST_TYPE"];

	switch( $POST_TYPE ){
		case "GET_CATEGORY":
			$CAT = array();
			$ONE = new stdClass();
			$ONE->color = "red";
			$ONE->icon = "desktop";
			$ONE->cat_name = "PROGRAMMING";
			array_push($CAT , $ONE );
			$two = new stdClass();
			$two->color = "green";
			$two->icon = "globe";
			$two->cat_name = "WEB DEVELOPMENT";
			array_push($CAT , $two );
			echo( json_encode($CAT) );
			break;
	}
?>
