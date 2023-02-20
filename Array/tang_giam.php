<?php
if(!function_exists('tangdan')){
    function tangdan($var =null){
        $count=count($var);
        if($count>0){
            echo"Tăng dần <br>";
            for ($i=0;$i<($count -1);$i++){
                for ($j=$i+1;$j<$count ;$j++){
                    if($var[$i]>$var[$j]){
                        $l=$var[$j];
                        $var[$j]=$var[$i];
                        $var[$i]=$l;
                    }
                }
            }
            for($i=0; $i<$count ;$i++){
                echo $var[$i]."<br>";
            }

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "giảm dần <br>";
            for ($i=0;$i<($count -1);$i++){
                for ($j=$i+1;$j<$count ;$j++){
                    if($var[$i]<$var[$j]){
                        $l=$var[$j];
                        $var[$j]=$var[$i];
                        $var[$i]=$l;
                    }
                }
            }
            for($i=0; $i<$count ;$i++){
                echo $var[$i]."<br>";
            }
        }
        else{
            echo "Hãy nhập giá trị";
        }
    }
}
tangdan(array(23,5,4,3,45,32,23,84))
?>