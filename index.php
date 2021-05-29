<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Drive Links Divider</title>
  <meta name="description" content="Divide Multiple Files Shared Links in New Line">
  <meta name="author" content="ola">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
<script type='text/javascript' src='https://c0.wp.com/c/5.4.2/wp-includes/js/jquery/jquery.js'></script>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <style>
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
</head>
<body>
    <center>
  <div class="container">
    <div class="row">   
      <div class="" style="margin: 5%">
          <h2>Drive Links Divider</h2>
    <form method="post" id="myform">
    <textarea placeholder="Paste Here..." name="text" style="width: 85%; height: 150px;"></textarea><br/>
    <input type="submit" value="Generate"/>
    </form>
    
      
    <?php if($_GET['name']) { ?>  
    <p style="display: none;" id="notification">Done!</p>
      <?php } ?>
      
    <div class="tooltip">
<button onclick="myFunction()" onmouseout="outFunc()">
  <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
  Copy text
  </button>
</div>
    <textarea id="myInput" placeholder="Output" style="width: 85%; height: 120px;"><?php if(isset($_POST['text'])) echo str_replace(", ", "\n", $_POST['text']); ?></textarea>
    
    
     </div>
    </div>
  </div>
    
</center>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied !!";
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
function myFunction2() {
  var copyText = document.getElementById("myInput2");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  
  var tooltip = document.getElementById("myTooltip2");
  tooltip.innerHTML = "Copied !!";
}

function outFunc2() {
  var tooltip = document.getElementById("myTooltip2");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>

</body>
</html>
