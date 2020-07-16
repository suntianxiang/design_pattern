<?php

namespace FM;

class TencentBlogFactory extends BlogFactory
{
    public function getPTInfo()
    {
        return 'tencent';
    }

    public function getBlog()
    {
        return new TencentBlog();
    }
}
