<?php

date_default_timezone_set("Europe/London");
$ddd=date("Y-m-d H:i:s");
echo "start: $ddd\n\r";
$date1 = time();

$filename = "map.bin";
$fp = fopen($filename, "rb");
$contents = file_get_contents('map.bin', null,null,2);
$fsize = filesize($filename);
$b=unpack("C*",$contents);
$xx=0;
$yy=0;
for($x=1;$x<=sizeof($b);$x=$x+1)
{
$ctype=tipo($b[$x] >> 4) ;
$bin=decbin($b[$x]);
$wtype=bindec(substr(decbin($b[$x]),-4 ));
$tile=$b[$x] ;
$y=($x-1);
$format="-%6d- [$xx x $yy]  ctype[%10s] level[%2d] %8s";
printf($format,$y,$ctype,$wtype,$bin);

$xxx=sprintf('%1$03d',$xx);
$yyy=sprintf('%1$03d',$yy);

echo "x $x [x$xxx y$yyy] \n\r";


$yy++;
if($yy>749)
{
$xx++;
echo "xx $xx ";
$yy=0;
}

}

function tipo($x)
{
if($x==1) return("plain");
if($x==2) return("mountain");
if($x==3) return("forest");
if($x==4) return("hill");
if($x==5) return("savana");
if($x==6) return("lake");
if($x==7) return("city");
if($x==8) return("anthro");
if($x==9) return("clouds");
}

fclose($fp);
?>

