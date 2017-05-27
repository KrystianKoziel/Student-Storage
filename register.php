<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		$wszystko_OK=true;
		
		$imie = $_POST['name'];
		$imie = htmlentities($imie, ENT_QUOTES, "UTF-8");
		$nazwisko = $_POST['surname'];
		$email = $_POST['email'];
		$haslo1 = $_POST['password1'];
		$haslo2 = $_POST['password2'];
		$indeks = $_POST['index'];
		$wydzial = $_POST['wydzial'];
		$kierunek = $_POST['kierunekSelect'];
		$semestr = $_POST['semestr'];
		
		echo $imie;
		
		if($haslo1 == $haslo2){
			$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		}
		else $wszystko_OK = false;
		
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
				echo "AAAA";
			}
			else
			{
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT idstudenta FROM studenci WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					echo "więcej maili";
					$wszystko_OK=false;
				}		

				
				
				
				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT idstudenta FROM studenci WHERE nr_indeksu='$indeks'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_indeksow = $rezultat->num_rows;
				if($ile_takich_indeksow>0)
				{
					$wszystko_OK=false;
				}
				if ($wszystko_OK==true)
				{
					if ($polaczenie->query("INSERT INTO `studenci` (`idstudenta`, `imie`, `nazwisko`, `haslo`, `email`, `nr_indeksu`, `wydzial`, `kierunek`, `semestr`) VALUES
(NULL, '$imie', '$nazwisko', '$haslo_hash', '$email', '$indeks', '$wydzial', '$kierunek', '$semestr')"))
					{
						header('Location: index.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
	
	
?>
