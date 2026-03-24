<?php

function checkpass($data)
{
    $credits = 0;
    if (strlen($data) > 12) {
        $credits += 5;
    }
    $lowercase = 0;
    $uppercase = 0;


    for ( $i = 0; $i < strlen($data); $i++) {
        $credits += 0.25;

        if ( preg_match('/[A-Z]/', $data[$i])){
            $credits += 0.75;
            $uppercase++;
        }
        if ( preg_match('/[a-z]/', $data[$i])) {
            $credits += 0.5;
            $lowercase++;
        }
        if ( preg_match('/[^a-zA-Z0-9]/', $data[$i])) {
            $credits += 2;
        }

        if ($i + 2 < strlen($data) && $data[$i] === $data[$i+1] && $data[$i] === $data[$i+2]) {
            $credits -= 3;
        }




    }
    if ($uppercase >= 1 && $lowercase >= 1) {
        $credits += 2;
    }
    return $credits;
}


if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['pass'];
    $result = checkpass($data);

    echo $result;




}