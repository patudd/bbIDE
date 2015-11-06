<!-- Einstellungen -->
<div class="modal fade" id="dlg_einstellungen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Einstellungen</h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" autocomplete="off">
				<div class="form-group">
					<label for="meinName" class="col-sm-4 control-label">Mein Name</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="meinName" placeholder="Max Mustermann" autocomplete="off">
					</div>
				</div>
				<div class="form-group">
					<label for="meinPasswort" class="col-sm-4 control-label">Mein Passwort</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="meinPasswort" placeholder="............." autocomplete="off">
					</div>
				</div>
				<div class="form-group">
					<label for="meineSprache" class="col-sm-4 control-label">Sprache</label>
					<div class="col-sm-8">
						<select class="form-control">
							<option value="deutsch">Deutsch / German</option>
							<option value="englisch">Englisch / English</option>
						</select>
					</div>
				</div>
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
				<button type="button" class="btn btn-primary">Speichern</button>
			</div>
		</div>
	</div>
</div><!-- /Einstellungen -->



<!-- Datei: Datei neu -->
<div class="modal fade" id="dlg_datei_neu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Datei erstellen</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" autocomplete="off">
					<div class="form-group">
						<label for="Dateiname" class="col-sm-4 control-label">Dateiname</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="Dateiname" placeholder="index" autocomplete="off">
						</div>
					</div>
					<div class="form-group">
						<label for="Dateierweiterung" class="col-sm-4 control-label">Dateierweiterung</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="Dateierweiterung" placeholder=".html" autocomplete="off">
						</div>
					</div>
					<div class="form-group">
						<label for="Pfad" class="col-sm-4 control-label">Speicherpfad</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="Speicherpfad" placeholder="/root/meinProjekt/" autocomplete="off">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
				<button type="button" class="btn btn-primary">Datei erstellen</button>
			</div>
		</div>
	</div>
</div><!-- /Datei: Datei neu -->



<!-- Datei: Datei öffnen -->
<div class="modal fade" id="dlg_datei_oeffnen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Datei öffnen</h4>
			</div>
			<div class="modal-body">
			...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
				<button type="button" class="btn btn-primary">Öffne Datei</button>
			</div>
		</div>
	</div>
</div><!-- /Datei: Datei oeffnen -->



<!-- Hilfe -->
<div class="modal fade" id="dlg_hilfe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Hilfe</h4>
			</div>
			<div class="modal-body">
				<table class="table">
					<tr><td colspan="2" class="active">Systemstatus</td></tr>
					<tr class="success"><td>Host:</td><td>web.domain.tld</td></tr>
					<tr class="success"><td>PHP:</td><td><?php echo "Version ".phpversion(); ?></td></tr>
					<tr class="success"><td>Datenbank:</td><td>MySQL x.x.x auf Host db.domain.tld</td></tr>
					<tr class="success"><td>Auflösung:</td><td>
					<script type="text/javascript">
					document.write(screen.width + "x" + screen.height + " davon verfügbar: " + screen.availWidth + "x" + screen.availHeight);
					</script></td></tr>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
			</div>
		</div>
	</div>
</div><!-- /Datei öffnen -->