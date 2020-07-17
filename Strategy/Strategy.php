<?php

namespace STG;

abstract class Question
{
    protected $prompt;

    protected $marker;

    public function __construct($prompt, Marker $marker)
    {
        $this->marker = $marker;
        $this->prompt = $prompt;
    }

    public function mark($reponse)
    {
        return $this->marker->mark($reponse);
    }
}

class TextQuestion extends Question
{
    // 处理文本问题特有的操作
}

class AVQuestion extends Question
{
    // 处理语音问题特有的操作
}

abstract class Marker
{
    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }
    abstract public function mark($reponse);
}

class MarkLogicMarker extends Marker
{
    public function mark($response)
    {
        echo 'mark response';
        return true; 
    }
}

class MatchMarker extends Marker
{
    protected $test;

    public function mark($response)
    {
        if ($this->content == $response) {
            return true;
        }
        return false;
    }
}

class RegexpMarker extends Marker
{
    public function mark($reponse)
    {
        return preg_match($this->content, $reponse);
    }
}