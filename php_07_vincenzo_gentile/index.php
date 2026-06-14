<?php

function checkLength($string) {
    if(strlen($string) >= 8) {
        return true;
    }
    echo "Mancava: almeno 8 caratteri \n";
    return false;
}

function checkUpperCase($string) {
    for($i = 0; $i < strlen($string); $i++) {
        if(ctype_upper($string[$i])) {
            return true;
        }
    }
    echo "Mancava: una lettera maiuscola \n";
    return false;
}

function checkNumber($string) {
    for($i = 0; $i < strlen($string); $i++) {
        if(is_numeric($string[$i])) {
            return true;
        }
    }
    echo "Mancava: un numero \n";
    return false;
}

function checkSpecial($string) {
    for($i = 0; $i < strlen($string); $i++) {
        if(!ctype_alnum($string[$i])) {
            return true;
        }
    }
    echo "Mancava: un carattere speciale \n";
    return false;
}

do {
    $password = readline("Inserire password: \n");

    $firstCheck = checkLength($password);
    $secondCheck = checkUpperCase($password);
    $thirdCheck = checkNumber($password);
    $fourthCheck = checkSpecial($password);

    if ($firstCheck && $secondCheck && $thirdCheck && $fourthCheck) {
        echo "true\nPassword corretta!\n";
        $valida = true;
    } else {
        echo "false\nPassword sbagliata, riprova.\n\n";
        $valida = false;
    }

} while (!$valida);
