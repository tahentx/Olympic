<?php

function clearsession(){
	session_unset();
	session_regenerate_id(true);
}

clearsession();

?>