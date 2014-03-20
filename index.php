<!DOCTYPE html>
<html>

  <head>
	<?php 
	require_once("resources/header.php"); 
			$session = 0;
			session_start();
			if (!isset($_SESSION['ID'])) 
			{
				header("location: login.php");
			}
			else if(isset($_SESSION['ID']))
			{
				$session = true;
			}
			
	?>
</head>
  <body>
<?php
require_once("resources/navigation.php"); 
?>
	<div class="container">
	<div class="content">
  <?php
            // Wo sind die Seiten?
            $seitenordner = 'sites/';

            // Standardseite
            $defaultseite = 'home.php';

            $errorseite = 'error.php';


            // Wurde eine Seite �bergeben?

            if (empty($_GET['sites'])) {
                $_GET['sites'] = $defaultseite;
            }

            // Gibt es die Datei wirklich?
            if (!file_exists($seitenordner . $_GET['sites'])) {
                $_GET['sites'] = $errorseite;
            }
			include $seitenordner . $_GET['sites'];
			if($_GET['sites'] == "home.php")
			{

			}
            // Inhalt einlesen
			/*else{
				echo "<br />";
				echo "<a href='?sites=home.php'>Startseite</a>";
			}*/
            
            ?>
			</div>
				<div class="footer">
		<?php 
			require_once("resources/footer.php"); 
		?>
	</div>
	</div>
	Hallo
  </body>

</html>