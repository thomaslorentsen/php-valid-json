<?php

namespace Parse;

class Json
{
    public function decode($json)
    {
        $result = json_decode($json);
        if (json_last_error()) {
            $error = sprintf('%s', json_last_error_msg());
            throw new \Exception($error);
        }
        return $result;
    }
}