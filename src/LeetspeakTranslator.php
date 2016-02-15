<?php

    class LeetspeakTranslator
    {
        function translate($user_string)
        {
            $letter_array = str_split($user_string, 1);
            return $letter_array;
        }
    }

?>
