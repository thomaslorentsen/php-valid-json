<?php

namespace Parse;

class Json
{
    public function decode($json)
    {
        return json_decode($json);
    }
}