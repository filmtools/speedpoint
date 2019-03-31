<?php
namespace FilmTools\SpeedPoint;

interface SpeedPointProviderInterface
{

    /**
     * Returns the SpeedPoint object.
     *
     * @return SpeedPointInterface
     */
    public function getSpeedPoint(): SpeedPointInterface;
}
