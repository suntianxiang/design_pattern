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

abstract class TileDecorator extends Tile
{
    protected $tile;
    
    public function __construct(Tile $tile)
    {
        return $this->tile = $tile;
    }
}

class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }
}

class PollutionDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() - 4;
    }
}

$tile = new Plains();
$tile = new DiamondDecorator($tile);
$tile = new PollutionDecorator($tile);