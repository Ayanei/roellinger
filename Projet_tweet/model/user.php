<?php

session_start();

Class User
{

private $_bdd;

		    public function __construct()
    {
        
        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=tweet', 'root', '');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        
    }

		public function inscription($login, $nom, $mail, $mdp)
		{

			if(isset($_POST['submit1'])){
			
				if($login && $mdp && $nom && $mail){
				
					   
                    $sql1 = "SELECT * from user WHERE mail ='$mail'";
                    $reponse = $this->_db->prepare($sql1);
                    $reponse->execute();
                    $value = $reponse->fetchAll();
                    $rows  = $reponse->rowCount();
					
					   if ($rows == 0) {
                            
                            $inscription = "INSERT INTO user (login,password, fullname, mail) VALUES (:login, :mdp, :nom, :mail)";
                            $reussite    = $this->_db->prepare($inscription);
                            $reussite->execute(array(
                                ':mdp' => $mdp,
                                ':nom' => $nom,
                                ':mail' => $mail,
								':login' => $login
     
                            ));
							var_dump($inscription);
                            $value = $reussite->fetchAll();
                            header("location: mail.php");
                            
                            
                        }else{

									 header("location: inscription.php");
							}
					
				}else{
				
							 header("location: inscription.php");
				
				}
			}
		}

		public function connexion($mail = "", $mdp = ""){
		
		 if (isset($_POST['submit'])) {
            
            if ($mail && $mdp) {
                
                $query = $this->_db->query("SELECT * FROM user WHERE login ='$mail' OR mail='$mail' AND password='$mdp'");
                $salutation2 = $query->fetch();
                $rows  = $query->rowCount();
                
                if($rows == 1) {

						    $_SESSION['nom'] = $salutation2['login'];
							setcookie("userid", $salutation2['id_user']);
					   $query = $this->_db->query("SELECT * FROM user");
					   
					   foreach($query as $v){
					
					if($v['activate'] == 1){
					
                    header("location: panel.php");
      
					}else{
			
					     header("location: start.php");
					
					}
	  
						} 
		
		}else{
		
				header("location: co.php");
		
		} } } }
		
		
		public function confirmMail($mail=""){
		
		
		if(isset($_POST['submit'])){
		
			if($mail){
			
				    $to = $mail;
					$subject = 'le sujet';
					$message = 'Bonjour !';
					$headers = 'From: webmaster@example.com' . "\r\n" .
					'Reply-To: webmaster@example.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
					mail($to, $subject, $message, $headers);
					
			header("location: co.php");
			
			}else{
			
					echo"veuillez completer le champs";
			}
		
		
		}
		
		
		}
		
		public function interestUser(){
	
			if(isset($_POST['inbox'])){
	
	$tabCheckbox = $_POST['inbox'];
	$string = "";
	foreach($tabCheckbox as $v){
		if (!empty($string))
		{
			$string .= ",";
		}
		$string .= $v;
	}
			   $receive = $this->_db->query("INSERT INTO info (id_user, activite) VALUES('" . $_COOKIE['userid'] . "', '" . $string . "')");
	
				header("location: follow_interest.php");	
	}
	else{
	
				header("location: follow_interest.php");
	}
		
		
		}
		
		public function getSuggestUser(){
		
	
				   $receive2 = $this->_db->query("SELECT * FROM user inner join info on user.id_user = info.id_user  where user.id_user !=" . $_COOKIE["userid"] . " group by login ORDER BY RAND()  LIMIT 30");
				   return $receive2;
				
		
		}
		
		public function deconnexion($deco=""){
			if ($deco) {
            
            session_start();
            session_destroy();
            setcookie("userid");
            header("location: index.php");
        }
		
		
		}
		
		
		public function startFollowUser(){
		
				if(isset($_POST['checkbox1'])){
	
	$tabCheckbox1 = $_POST['checkbox1'];
	foreach($tabCheckbox1 as $v1){

	
	$receive = $this->_db->query("INSERT INTO followers (id_user, id_follower) VALUES('" . $_COOKIE['userid'] . "', '" . $v1. "')");
	
	}
	
				header("location: setup_profil.php");	
	}
	else{
	
				header("location: setup_profil.php");
	}
		
		}
		
			public function getProfilUser(){
		
	
				   $receive2 = $this->_db->query("SELECT * FROM user inner join info on user.id_user = info.id_user  where user.id_user =" . $_COOKIE["userid"] . " group by fullname");
				   return $receive2;
				
		
		}
		
		public function ajoutPhotoUser(){
		
			if (isset($_POST['activite']) == false)
				{$_POST['activite'] = "";}		
	 
	 
		if ($_POST['activite'] == "ajouter")
        {
            move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$_FILES['image']['name']);
            $_POST['activite'] = "";
        }
	 
	 
		}
		
		}
		
		

?>





















































