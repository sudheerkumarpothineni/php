<?php
    function voteCheck($age){
        echo ($age >= 18) ? "Yes" : 'No';
    }

    voteCheck(20);
?>