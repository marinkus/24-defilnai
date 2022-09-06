<?php

namespace App\Services;

class Messages {
    

    static public function makeMsg($type, $text)
    {
        $_SESSION['msg'][] = ['type' => $type, 'text' => $text]; // [] leidzia naudoti daugiau nei viena msg
    }


}