<?php // convert.php
require_once 'index.php';
$number=$n;
$rOP=" ";
$dec=array(1,4,5,9,10,40,50,90,100,400,500,900,1000);
$rom=array("I","IV","V","IX","X","XL","L","XC","C","CD","D","CM","M");
	
	while($n!=0)
	{	
		for($i=0;$i<14;$i++)
		{	if($n>=1000)
			{
				$rOP.="M";
				$n-=1000;
				break;
			}
			else if($n<$dec[$i])
			{
				$temp=$i-1;				
				$rOP.=$rom[$temp];
				$n-=$dec[$temp];
				break;
			}		
		}
		$out= "$rOP";
	}

echo <<<_END
<html>
  <head>
	<link rel="stylesheet" href="./static/bootstrap.css">
	<link rel="stylesheet" href="./static/style.css">
    <title>Decimal to Roman Converter</title>
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12 ">
				<p id="output"><b>$number > $out</b></p>
			</div>			
		</div>
	</div>
</body>
_END;
?>