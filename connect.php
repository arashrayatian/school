<?php
session_start();

	$db= new mysqli("localhost", "root", "", "school");
        $db->set_charset("utf8");
        $db->query('SET NAMES \'utf8\'');