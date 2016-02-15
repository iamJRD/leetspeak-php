<?php

    class LeetspeakTranslator
    {
        function translate($user_string)
        {
            $letter_array = str_split($user_string, 1);
            $results_array = array();

            foreach($letter_array as $letter){
                if(($letter == 's' || $letter == 'S') && ($letter != $letter_array[0])) {
                    array_push($results_array, 'z');
                } elseif($letter == 'I') {
                    array_push($results_array, '1');
                } elseif($letter == 'e' || $letter == 'E') {
                    array_push($results_array, '3');
                } elseif($letter == 'o' || $letter == 'O') {
                    array_push($results_array, '0');
                } else {
                    array_push($results_array, $letter);
                }
            }
            $translated = implode($results_array);
            return $translated;
        }
    }

?>
