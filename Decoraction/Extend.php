<?php

abstract class Tile
{
    abstract public function getWealthFactor();
}

class Plains extends Tile
{
    private $wealthfactor = 2;

    public function getWealthFactor()
    {
        return $this->wealthfactor;
    }
}

// 我们还需要修改Plains对象的行为， 用户处理一些自然资源和人类滥用的效果。我们希望
// 为地表钻石的分布和污染造成的破坏建模。有个办法是从Plains对象派生。

class DiamondPlains extends Plains
{
    public function getWealthFactor()
    {
        return parent::getWealthFactor() + 2;
    }
}

class PollutedPlains extends Plains
{
    public function getWealthFactor()
    {
        return parent::getWealthFactor() - 4;
    }
}

// 那么如何创建既含有钻石又被污染的Plains呢？