<?php
if(isset($_GET['send']))
{
    $a = $_GET['marketing'];
    $b = $_GET['transport'];
    $c = $_GET['income'];

    echo "Your Predicted Profit of month :",6.42223930e-01*$a + 1.25076361e-01*$b + 8.26494032e-02*$c + 31235.265479815585 ;
}
?>