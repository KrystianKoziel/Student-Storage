
<?php
   session_start();
   if((!isset($_SESSION['logged'])) || ($_SESSION['logged'] != true)){
 		header('Location: index.php');
 		exit();
 	}
	 $id = $_SESSION['id_studenta'];
  ?>


<!DOCTYPE html>
<html>
<head>
	<meta name="Description" content="">
	<meta name="Keywords" content="pliki  studia ">
	<meta name="Author" content="Krystian Kozieł">
	<link rel="stylesheet" href="css/sidebar.css" type="text/css">
	<script type="text/javascript" src="prototype.js"></script>
	<script type="text/javascript" src="load.js"></script>
	<title>Pliki pliki pliki</title>
</head>
<body>
<iframe name="main" src="user.php"></iframe>
<div id="content">




			<div id="menu">
				<div class="title">Lista semestrów</div>
				<ul id="menu-content">
					<li class="dropdown">
						<div class="dropdown-content" id ="s1">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 1);
							</script>
						</div>
						<a target="main" class="dropbtn" >Sem I</a>
					</li>

					<li class="dropdown">
            <div class="dropdown-content" id= "s2" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 2);
							</script>
						</div>

						<a target="main" class="dropbtn">Sem II</a>

					</li>
					<li class="dropdown">

						<div class="dropdown-content" id = "s3" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 3);
							</script>

						</div>
						<a target="main" class="dropbtn">Sem III</a>

          </li>

					<li class="dropdown">
						<div class="dropdown-content" id = "s4" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 4);
							</script>
						</div>
						<a target="main" class="dropbtn">Sem IV</a>
					</li>

					<li class="dropdown">
						<div class="dropdown-content" id = "s5" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 5);

							</script>
						</div>

						<a target="main" class="dropbtn">Sem V</a>
					</li>

					<li class="dropdown">
            <div class="dropdown-content" id = "s6" onload="#">

							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 6);
							</script>

						</div>
						<a target="main" class="dropbtn">Sem VI</a>
					</li>

          <li class="dropdown">
						<div class="dropdown-content" id = "s7" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 7)
							</script>
						</div>
						<a target="main" class="dropbtn">Sem VII</a>
					</li>


				</ul>
			</div>

	</div>
</div>
</body>
