<?php
	session_start();
	
	if((!isset($_POST['email'])) || (!isset($_POST['password']))){
		header('Location: index.php');
		exit();
	}
	
	require_once "connect.php";
	
	try{	
		if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
		else
		{
			$email = $_POST['email'];
			$haslo = $_POST['password'];
	
			if ($rezultat = @$polaczenie->query(
			sprintf("SELECT * FROM studenci WHERE email='$email'")))
			{
				$ilu_userow = $rezultat->num_rows;
				if($ilu_userow>0)
				{
					$wiersz = $rezultat->fetch_assoc();
					
					
					if (password_verify($haslo, $wiersz['haslo']))
					{
						$_SESSION['logged'] = true;
						$_SESSION['id_studenta'] = $wiersz['idstudenta'];
						$rezultat->free_result();
						header('Location: main.php'); //udało się zalogować
					}
					else 
					{
						
						$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy email lub hasło!</span>';
						#header('Location: index.html');
					}
				
				} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy email lub hasło!</span>';
				#header('Location: index.html');
					
				}
			
			}else
			{
				echo $email;
				echo $haslo;
				echo "Nieprawidłowy email lub hasło!";
			}
		
			$polaczenie->close();
		}
	}
	catch(Exception $e)
	{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
	}
	
	
?>