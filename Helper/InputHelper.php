<?php

namespace Helper {

    class InputHelper
    {
        static function Input($info)
        {
            echo "$info :";
            $result = fgets(STDIN);
            return trim($result);
        }
    }
}
