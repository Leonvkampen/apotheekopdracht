<?php
$t=time();
$huidigetijd = (date('H:i:s',$t));

var_dump($huidigetijd);

if( $huidigetijd > '13:30:00'  )
    {
echo "test";
    }else{
    echo"tetsetse";
}

?>

