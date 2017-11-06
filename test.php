<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>keypress demo</title>
  <style>
  fieldset {
    margin-bottom: 1em;
  }
  input {
    display: block;
    margin-bottom: .25em;
  }
  #print-output {
    width: 100%;
  }
  .print-output-line {
    white-space: pre;
    padding: 5px;
    font-family: monaco, monospace;
    font-size: .7em;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<form>
  <fieldset>
    <label for="target">Type Something:</label>
    <input id="target" type="text">
  </fieldset>
</form>
<button id="other">
  Trigger the handler
</button>
 
<script>
var xTriggered = 0;
$( "#target" ).keypress(function( event ) {
  if ( event.which == 13 ) {
    console.log("enter") ;
     event.preventDefault();
  }
  xTriggered++;
  var msg = "Handler for .keypress() called " + xTriggered + " time(s).";
  console.log(msg) ;
});
 
$( "#other" ).click(function() {
  $( "#target" ).keypress();
});
</script>
 
</body>
</html>