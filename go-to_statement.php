<!-- <?php

for($i=0;$i<=20;$i++){
    echo $i;

    if($i=12){
        goto jump;
    }
    
}
    
    $name= "Krunalsinh";
    echo $name;

jump:
echo "After the condition. statement is jumped on existing value..";
?> -->

<?php
for($i=0;$i<=20;$i++){
    echo "$i <br>";

    if($i == 5){
        goto outSideLoop;
    }
}

outSideLoop:
echo "Loop is break";
?>