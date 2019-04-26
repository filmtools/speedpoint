<?php
namespace FilmTools\SpeedPoint;

interface SpeedPointInterface
{

    /**
     * Returns true if the speedpoint value is valid.
     */
    public function valid() : bool;


    /**
     * Returns name or description (film speed evaluation method).
     */
    public function getType() : ?string;


    /**
     * Returns the sped point exposure value
     * which yields a certain minimum density.
     *
     * @return float
     */
    public function getValue() : ?float;



    /**
     * Returns the difference between the real speed point
     * and the exposure value where the minimum density had been expected.
     *
     * @return float
     */
    public function getSpeedLoss() : ?float;



    /**
     * Converts the "speed loss" to Exposure Index (°DIN) steps.
     *
     * @return float
     */
    public function getEICorrection() : ?float;
}
