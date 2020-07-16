<?php

namespace FM;

class SinaBlogFactory extends BlogFactory
{
    public function getPTInfo()
    {
        return 'sina';
    }

    public function getBlog()
    {
        return new SinaBlog();
    }
}
