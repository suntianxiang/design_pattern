<?php

namespace FM;

abstract class Blog
{
    abstract public function encode();
}

class SinaBlog extends Blog
{
    public function encode()
    {
        return 'sina blog';
    }
}

class TencentBlog extends Blog
{
    public function encode()
    {
        return 'tencent blog';
    }
}

class BlogFactory
{
    const TENCENT = 1;
    const SINA = 2;

    protected $platform;

    public function __construct($platform)
    {
        $this->platform = $platform;
    }

    public function getBlog()
    {
        switch ($this->platform) {
            case self::TENCENT:
                return new TencentBlog();
            case self::SINA:
            default:
                return new SinaBlog();
            // case wangyi
        }
    }

    // 新需求
    // public function getPTInfo()
    // {
    //     switch ($this->platform) {
    //         case self::TENCENT:
    //             return '腾讯';
    //         case self::SINA:
    //         default:
    //             return '新浪';
    //     }
    // }
}
