<?php

if(isset($index)){
	callTemplate("404page");
	// Setting up headers on 404
	header("HTTP/1.0 404 Not Found");
}
