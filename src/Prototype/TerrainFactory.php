<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 09/08/2017
 * Time: 14:09
 */

namespace Prototype;

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->forest = $forest;
        $this->sea = $sea;
        $this->plains = $plains;
    }

    public function getSea()
    {
        return clone $this->sea;
    }

    public function getForest()
    {
        return clone $this->forest;
    }

    public function getPlains()
    {
        return clone $this->plains;
    }
}