<?php
	namespace funcs;

	class Functions
	{

		public static function conn() {
			/* VARIABLES */
			$db_serv = "localhost";
			$db_user = "kdb";
			$db_pass = "";
			$db_name = "kdb";

			return mysqli_connect($db_serv, $db_user, $db_pass, $db_name);
		}

		public static function query($db_conn, $sql) {
			return mysqli_query ($db_conn, $sql);
		}
	}
?>
