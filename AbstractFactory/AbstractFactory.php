<?php

namespace AF;

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

abstract class Video
{
    abstract public function encode();
}

class SinaVideo extends Video
{
    public function encode()
    {
        return 'sina video';
    }
}

class TencentVideo extends Video
{
    public function encode()
    {
        return 'tencent video';
    }
}


abstract class PlatformFactory
{
    abstract public function getBlog();

    abstract public function getVideo();

    abstract public function getPTInfo();
}


class TencentFactory extends PlatformFactory
{
    public function getBlog()
    {
        return new TencentBlog();
    }

    public function getVideo()
    {
        return new TencentVideo();
    }

    public function getPTInfo()
    {
        return 'tencent';
    }
}

class SinaFactory extends PlatformFactory
{
    public function getBlog()
    {
        return new SinaBlog();
    }

    public function getVideo()
    {
        return new SinaVideo();
    }

    public function getPTInfo()
    {
        return 'tencent';
    }
}