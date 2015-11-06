<?php
function zeigePanelAnsicht() {
	echo '
<div class="panel panel-default">
	<div class="panel-heading">Ansicht</div>
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li role="presentation"'; if($_GET["ansicht"]=="layout") { echo "class='active'"; } echo '><a href="index.php?ansicht=layout">Layout</a></li>
			<li role="presentation"'; if($_GET["ansicht"]=="code") { echo "class='active'"; } echo '><a href="index.php?ansicht=code">Code</a></li>
			<li role="presentation"'; if($_GET["ansicht"]=="run") { echo "class='active'"; } echo '><a href="index.php?ansicht=run">Ausführung</a></li>
		</ul>
	</div>
</div>';
}

function zeigePanelEigenschaften() {
	echo '
<div class="panel panel-default sidebar-panel">
	<div class="panel-heading">Eigenschaften</div>
	<div class="panel-body h-35p">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="ElementID" class="col-sm-4 control-label">Element-ID</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="ElementID" placeholder="abc123">
				</div>
			</div>
			<div class="form-group">
				<label for="Beschriftung" class="col-sm-4 control-label">Beschriftung</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="Beschriftung" placeholder="Ich bin ein Element">
				</div>
			</div>
			<div class="form-group">
				<label for="Hintergrund" class="col-sm-4 control-label">Hintergrund</label>
				<div class="col-sm-8">
					<input type="color" class="form-control" maxlength="7" id="Hintergrund" placeholder="#FFFFFF">
				</div>
			</div>
			<div class="form-group">
				<label for="Vordergrund" class="col-sm-4 control-label">Vordergrund</label>
				<div class="col-sm-8">
					<input type="color" class="form-control" maxlength="7" id="Vordergrund" placeholder="#000000">
				</div>
			</div>
			<div class="form-group">
				<label for="Border" class="col-sm-4 control-label">Border (CSS)</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="Border" placeholder="1px solid black">
				</div>
			</div>
			<div class="form-group">
				<label for="Font" class="col-sm-4 control-label">Font</label>
				<div class="col-sm-8">
					<select name="Font" class="form-control">
						<option>Arial</option>
						<option>Calibri</option>
						<option>Cambria</option>
						<option>Times New Roman</option>
						<option>Verdana</option>
					</select>
				</div>
			</div>
		</form>
	</div>
	<div class="panel-footer">
		<div class="form-group">
			<div class="col-sm-6">
				<button type="button" class="btn btn-primary btn-block btn-sm">Code</button>
			</div>
			<div class="col-sm-6">
				<button type="submit" class="btn btn-primary btn-block btn-sm">Übernehmen</button>
			</div>
		</div>
	</div>
</div>';
}

function zeigePanelVerkCode() {
	echo '
<div class="panel panel-default sidebar-panel">
	<div class="panel-heading">Verknüpfter Code</div>
	<div class="panel-body">
		<form class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-12">
					<textarea rows="3" class="form-control" id="element_code" placeholder="Fügen Sie Ihren Code hier ein."></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="ausfuehrung" class="col-sm-4 control-label">Ausführung</label>
				<div class="col-sm-8">
					<select class="form-control">
						<option>onHover</option>
						<option>onClick</option>
						<option>onLoad</option>
					</select>
				</div>
			</div>
		</form>
	</div>
	<div class="panel-footer">
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<button type="submit" class="btn btn-primary btn-block btn-sm">Übernehmen</button>
			</div>
		</div>
	</div>
</div>';
}

function zeigePanelLayoutVorlagen() {
	echo '
<div class="panel panel-default">
	<div class="panel-heading">Layout-Vorlagen</div>
	<div class="panel-body">
		<p>Drag&Drop Elemente hier</p>
	</div>
</div>';
}

function zeigePanelBausteine() {
	echo '
<div class="panel panel-default">
	<div class="panel-heading">Bausteine</div>
	<div class="panel-body">
		<p>Drag&Drop Elemente hier</p>
	</div>
</div>';
}

function zeigePanelSchnellzugriff() {
	echo '
<div class="panel panel-default">
	<div class="panel-heading">Schnellzugriff</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<li><a href="#">Rolle: Developer</a></li>
			<li><a href="#">Speichern</a></li>
			<li><a href="#">Beenden</a></li>
		</ul>
	</div>
</div>';
}

function zeigePanelEditorFunktionen() {
	echo '
<div class="panel panel-default">
	<div class="panel-heading">Code-Editor</div>
	<div class="panel-body">
		<button type="button" class="btn btn-primary btn-block">Änderungen speichern</button>
	</div>
</div>';
}

function zeigePanelDateiInformationen() {
	echo '
<div class="panel panel-default">
	<div class="panel-heading">Datei-Informationen</div>
	<div class="panel-body">
		Datei <span class="badge">/root/meinProjekt/Testdatei.js</span><br />
		Größe <span class="badge">12 KByte</span><br />
		Ersteller <span class="badge">Max Mustermann</span><br />
		erstellt <span class="badge">04.11.15 - 11:15:10</span><br />
		geändert <span class="badge">04.11.15 - 11:25:10</span>
	</div>
</div>';
}

function zeigePanelDateiBrowser() {
	echo '
<div class="panel panel-default">
	<div class="panel-heading">Datei-Browser</div>
	<div class="panel-body">
		...
	</div>
</div>';
}