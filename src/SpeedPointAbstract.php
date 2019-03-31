<?php
namespace FilmTools\SpeedPoint;

abstract class SpeedPointAbstract implements SpeedPointInterface
{

    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $type;





    /**
     * @inheritDoc
     */
    public function getType() : ?string
    {
        return $this->type;
    }


    /**
     * inheritDoc
     */
    public function getValue() : float
    {
        return $this->value;
    }



    /**
     * Subtracts log10( 2 ) from the Speed point value.
     *
     * inheritDoc
     */
    public function getSpeedLoss() : float
    {
        return $this->getValue() - log10(2);
    }



    /**
     * Calculates the number of DIN steps for exposure compensation.
     *
     * inheritDoc
     */
    public function getEICorrection() : float
    {
        return $this->getSpeedLoss() * 10;
    }

}
