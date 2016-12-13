<?php
/*
	unPOSTer v0.9
	(c) 2016 Thielicious
	thielicious.github.io
	----------------------
	
	Tiny class which prevents form reposting on page refresh. 
	Adjustable whether you keep posted data after refesh or not.
	
	Methods:
		pub __construct()
		pub active(switch)
		prv setPOSTData(data_name)
		prv setPOST([post])
		pub unPOST()
		prv ErrMSG(msg)
*/
	
	
	class unPOSTer {
		
		private
			$postdata = "post_data",
			$active = 0,
			$keep = 0;
			
		public function active($switch) {
			if ($switch == 1 || 0) {
				$this->active = $switch;
			}
		}
		
		private function setPOSTData($data_name) {
			$this->postdata = $data_name;
		}
		
		public function keepPOST($yn) {
			if ($yn == 1 || 0) {
				$this->keep = $yn;
			}
		}
		
		private function setPOST($post = null) {			
			if (session_status() !== PHP_SESSION_ACTIVE) {
				session_start();
			}
			if (isset($_POST)) {
				$_SESSION[$this->postdata] = 
					$post ? 
						$_POST[$post] : 
						$_POST;
			} else {
				$this->ErrMSG("No POST data exists.");
			}
		}
		
		public function unPOST() {
			if ($this->active == 1) {
				if (session_status() !== PHP_SESSION_ACTIVE) {
					session_start();
				}
				if (strcasecmp($_SERVER["REQUEST_METHOD"],"POST") === 0) {
					if (!isset($_SESSION[$this->postdata])) {
						$this->setPOST();
					} 
					header("Location: " . $_SERVER["PHP_SELF"] . "?" . $_SERVER["QUERY_STRING"]);
					exit;
				} 
				elseif (isset($_SESSION[$this->postdata])) {
					$_POST = $_SESSION[$this->postdata];
					if ($this->keep == 0) {
						unset($_SESSION[$this->postdata]);
					}
				}
			} 
		} 
		
		private function ErrMSG($msg) {
			$err = function() {
				return "<script>alert(\"[unPOST]\"\n\nError:".$msg."\")</script>";
			};
			echo $err($msg);
		}
	}
?>