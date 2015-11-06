<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/sample-logo.png" id="logo"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Datei <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#dlg_datei_neu">Neu</a></li>
            <li><a data-toggle="modal" data-target="#dlg_datei_oeffnen">Öffnen</a></li>
			<li><a href="#">Speichern</a></li>
			<li><a href="#">Speichern als</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Importieren</a></li>
			<li><a href="#">Exportieren</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Drucken</a></li>
			<li><a href="#">Schließen</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bearbeiten <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="javascript:editor.undo();">Rückgängig</a></li>
            <li><a onclick="javascript:editor.redo();">Wiederholen</a></li>
            <li><a href="#">Kopieren</a></li>
			<li><a href="#">Ausschneiden</a></li>
			<li><a href="#">Einfügen</a></li>
			<li><a href="#">Suchen & Ersetzen</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projekt <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Neues Projekt</a></li>
            <li><a href="#">Öffne Projekt</a></li>
            <li><a href="#">Schließe Projekt</a></li>
            <li role="separator" class="divider"></li>
			<li><a href="#">Baue Anwendung</a></li>
			<li><a href="#">Anwendung ausführen</a></li>
            <li><a href="#">Anwendung freigeben</a></li>
			<li><a href="#">Anwendung exportieren</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Max Mustermann <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#dlg_einstellungen">Einstellungen</a></li>
            <li><a href="#">Abmelden</a></li>
            <li><a data-toggle="modal" data-target="#dlg_hilfe">Hilfe</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>