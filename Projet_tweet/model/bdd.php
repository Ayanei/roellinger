<?php
class Bdd
{
	private $_bdd;

	public function __construct()
	{
		try
		{
			$this->_bdd = new PDO('mysql:host=localhost;dbname=tweet', 'root', '');
		}	
		catch (Exception $erreur)
		{
				die('Erreur : ' . $erreur->getMessage()); 

			}
		}

		public function execute($query, $attr)
		{
			// var_dump($attr);
			// var_dump($query);
			$request = $this->_bdd->prepare($query);
			$request->execute($attr);
			$data = $request->fetchAll();
			
			// var_dump($request);
			return $data;
		}

	


	}
	?>







