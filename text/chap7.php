<?php
for($i=1; $i<31; $i++){
    if($i % 5 == 0 and $i % 3 == 0){
        print("FizzBuzz"."\n");
    }elseif($i % 5 == 0 ){
        print("Buzz"."\n");
    }elseif($i % 3 == 0){
        print("Fuzz"."\n");
    }else{
        print($i."\n");
    }

}
?>