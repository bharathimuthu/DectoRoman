<?php
//require_once 'roman.php';
$n='';
if (isset($_POST['n'])) $n = sanitizeString($_POST['n']);
echo <<<_END
<html>
  <head>
	<link rel="stylesheet" href="./static/bootstrap.css">
	<link rel="stylesheet" href="./static/style.css">
    <title>Decimal to Roman Converter</title>
  </head>
  <body>
  	<div class="container" id="logo">
		<img src="./images/logo.png"></img>
	</div>
	<div class="container">
		<h1 class="page-header"> Decimal to Roman Converter</h1>
	</div>
      <div class="container">
		<br>
		<br>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12 ">
			<form method="post" action="roman.php" role="form">
			<div class="form-group">
			<input type="text" name="n" size="7" class="form-control" id="number" placeholder="Enter Number">
			<input class="btn btn-default" type="submit" value="Convert to Roman">
			</div>
			</form>			
			</div>
	  </div>
	  </div>
	  
    <div class="footer">
      <div class="container">
	  <p></p>
        <p class="text-muted">Copyright &copy 2014 Bharathi Muthu</p>
      </div>
    </div>
  </body>
</html>
_END;

function sanitizeString($var)
  {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
  }
?>