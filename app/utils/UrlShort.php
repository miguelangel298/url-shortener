<?php

namespace App\utils;

class UrlShort {

    protected $length = 6;

    public function setLength(int $length): self
    {
        $this->length = $length;
        return $this;
    }


    public function generate(): string
    {
        $characters = str_repeat('shsokokAbcdE54accnpoiuytrezxvBnmlkjHgFda1234568Udsdasu', $this->length);
        return substr(str_shuffle($characters), 0, $this->length);
    }
}
