<div id="code">		
<div id="editor">var carName1 = "Volvo XC60";
var carName2 = 'Volvo XC60';
var answer1 = "It's alright";
var answer2 = "He is called 'Johnny'";
var answer3 = 'He is called "Johnny"';

document.getElementById("demo").innerHTML =
carName1 + "<br>" + 
carName2 + "<br>" + 
answer1 + "<br>" + 
answer2 + "<br>" + 
answer3;</div>
    
<script src="lib/ace/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/javascript");
	editor.setShowPrintMargin(0);
</script>
</div>