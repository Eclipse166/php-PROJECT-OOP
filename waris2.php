<?php
include ("waris1.php");
class OrangSunda extends Orang{
}
class OrangInggris extends Orang{
    protected $asal="England";
    function UcapSalam(){
        echo "Hallo, My Name is ".$this->nama."<br>";
    }
    function UcapNegara(){
        echo "I'm from ".$this->asal."<br>";
    }
}
$kabayan=new OrangSunda("kabayan");
$kabayan->UcapSalam();
$william=new OrangInggris("Prince William");
$william->UcapSalam();
$william->UcapNegara();
?>
fafafa