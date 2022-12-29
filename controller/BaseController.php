<?php
	interface BaseController {
		function index();
		function create();
		function store();
		function update();
		function process_update();
		function detail();
		function delete();
	}

?>