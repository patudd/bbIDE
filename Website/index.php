<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/bootstrap.css">
<link rel="stylesheet" href="style/bootstrap-theme.css">
<link rel="stylesheet" href="style/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>WebIDE</title>
</head>
<body>
<?php include "inc/topmenu.php"; include "inc/dialog.php"; include "inc/sidebar_panels.php"; ?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 sidebar">
				<?php 
					if(isset($_GET["ansicht"])) {
						if($_GET["ansicht"]=="layout") {
							zeigePanelLayoutVorlagen();
							zeigePanelBausteine();
						}
						if($_GET["ansicht"]=="code") {
							zeigePanelDateiBrowser();
						}
						if($_GET["ansicht"]=="run") {
							
						}
					}
					else {
						zeigePanelLayoutVorlagen();
						zeigePanelBausteine();
					}
					zeigePanelSchnellzugriff();
				?>
			</div>
			<div class="col-xs-8 col-sm-6 col-md-6 col-lg-8">
			<!-- Mittlere Spalte -->
				<?php 
					if(isset($_GET["ansicht"])) {
						if($_GET["ansicht"]=="layout") {
							include "layout.php";
						}
						if($_GET["ansicht"]=="code") {
							include "code.php";
						}
						if($_GET["ansicht"]=="run") {
							include "run.php";
						}
					}
					else {
						include "layout.php";
					}
				?>
			<!-- Ende Mittlere Spalte -->
			</div>
			<div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 sidebar">
				<?php 
					zeigePanelAnsicht();
					if(isset($_GET["ansicht"])) {
						if($_GET["ansicht"]=="layout") {
							zeigePanelEigenschaften();
							#zeigePanelVerkCode();
						}
						if($_GET["ansicht"]=="code") {
							zeigePanelEditorFunktionen();
							zeigePanelDateiInformationen();
						}
						if($_GET["ansicht"]=="run") {
							
						}
					}
					else {
						zeigePanelEigenschaften();
					}
				?>
			</div>
		</div>
	</div>
	<div class="panel-footer"><?php include "inc/footer.php"; ?></div>
</div>
</body>
</html>