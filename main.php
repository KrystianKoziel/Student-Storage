
<?php
   session_start();
	 $id = $_SESSION['id_studenta'];
  ?>


<!DOCTYPE html>
<html>
<head>
	<meta name="Description" content="">
	<meta name="Keywords" content="pliki  studia ">
	<meta name="Author" content="Krystian Kozieł">
	<link rel="stylesheet" href="css/sidebar.css" type="text/css">
	<script type="text/javascript" src="formularz.js"></script>
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
						<div class="dropdown-content">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 1);
							</script>
						</div>
						<a target="main" class="dropbtn" id ="s1">Sem I</a>
					</li>

					<li class="dropdown">
            <div class="dropdown-content" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 2);
							</script>
						</div>

						<a target="main" class="dropbtn" id= "s2">Sem II</a>

					</li>
					<li class="dropdown">

						<div class="dropdown-content" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 3);
							</script>

						</div>
						<a target="main" class="dropbtn" id = "s3">Sem III</a>

          </li>

					<li class="dropdown">
						<div class="dropdown-content" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 4);
							</script>
						</div>
						<a target="main" class="dropbtn" id = "s4">Sem IV</a>
					</li>

					<li class="dropdown">
						<div class="dropdown-content" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 5);

							</script>
						</div>

						<a target="main" class="dropbtn" id = "s5">Sem V</a>
					</li>

					<li class="dropdown">
            <div class="dropdown-content" onload="#">

							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 6);
							</script>

						</div>
						<a target="main" class="dropbtn" id = "s6">Sem VI</a>
					</li>

          <li class="dropdown">
						<div class="dropdown-content" onload="#">
							<script type="text/javascript">

						id = <?php echo($id) ?>;
						loadsub(id, 7)
							</script>
						</div>
						<a target="main" class="dropbtn" id = "s7">Sem VII</a>
					</li>


				</ul>
			</div>

	</div>
</div>
</body>
