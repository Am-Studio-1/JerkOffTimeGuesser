<?php

    class DickJerkOffAlgorythm
    {
        function ReturnTime(){

            $HumanDicks = $_POST["PeopleToJerkOff"];
            $TimeToJerkOff = 1;
            $AvrgeJerkOffDick = 13;
            $avrageCumTime = rand(5, 10);


            $TimeToJerkOff = ($HumanDicks *$avrageCumTime)/$AvrgeJerkOffDick;

            echo " <div class='Rsponse'>
            
                <h1> Time To Jerk Off : ".$TimeToJerkOff." minutes</h1>
                
                
                </div>
                ";

        }
    }
    
?>