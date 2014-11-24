<?php
if(!class_exists('joomba')){
	class Joomba(
			function register($redirect){
				global $jdb;
				$current='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

				$referrer =$_SERVER['HTTP_REFERE'];

				if(!empty($_POST)){

					if(!referrer ==$current){

						required_once('db.php');
						$table='j_users';
						$fields=array('user_name','user_login','user_pass','user_email','user_registered');
						$values=$jdb->clean($_POST);

						$username=$_POST['name'];
						$userlogin=$_POST['username'];
						$userpass=$_POST['password'];
						$useremail=$_POST['email'];
						$userreg=$_POST['date'];

						$nonce=md5('registration-'.$userlogin.$userreg.NONCE_SALT);

						$userpass=$jdb->hash_password($userpass,$nonce);

						$value=array(
								'name'=>$username,
								'username'=>$userlogin,
								'password'=>$userpass,
								'email'=>$useremail,
								'data'=>$userreg

							);
						$insert=$jdb->insert($link,$table,$fields,$values);

						if($insert==TRUE){

							$url="http".
						}

					}
				}
			}

		)

}
