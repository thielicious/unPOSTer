<?php
/*
	unPOSTer v1.0
	(c) 2016 Thielicious
	thielicious.github.io
	----------------------
	
	Tiny class which prevents form reposting on page refresh. 
	
	Methods:
		pub __construct()		Checks if session has already started, defines a session value name for the POST data
		pub unPost()			assigns POST data to the session value and sends it to the header as GET request
		pub retrieve()			retrieves the session value which actually contains POST data
		pub reset()				optional: if you don't want to keep the data, it will clear the session value
*/
	
	
	class unPOSTer {

		private 
			$post = "KEEP_POST";

		function __construct(string $name = null) {
			$this->chkSession();
			$this->post = 
				!is_null($name) ? 
				$name : $this->post;
		}

		private function chkSession() {
			if (version_compare(PHP_VERSION, "5.4.0") >= 0) {
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
			} else {
				if (!$_SESSION) {
					session_start();
				}
			}
		}
		
		public function unPost() {
			if (session_status() !== PHP_SESSION_ACTIVE) {
				session_start();
			} elseif (strcasecmp($_SERVER["REQUEST_METHOD"],"POST") === 0) {
				$_SESSION[$this->post] = $_POST;
				header("Location: " . $_SERVER["PHP_SELF"] . "?" . $_SERVER["QUERY_STRING"]);
				exit;
			} elseif (isset($_SESSION[$this->post])) {
				$_POST = $_SESSION[$this->post];
			}
		}
		
		public function retrieve($data) {
			if (isset($_SESSION[$this->post])) {
				$posts = @$_SESSION[$this->post][$data];
				if (isset($posts)) {
					return $posts;
				} else {
					return null;
				}
			} 
		}
		
		public function reset() {
			if (isset($_SESSION[$this->post])) {
				unset($_SESSION[$this->post]);
			}
		}
	}
?>
