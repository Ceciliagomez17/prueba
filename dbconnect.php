<?php

	 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "1234";
	 $DBname = "system";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
