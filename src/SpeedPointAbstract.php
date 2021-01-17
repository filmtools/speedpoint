<?php
namespace FilmTools\SpeedPoint;

abstract class SpeedPointAbstract implements SpeedPointInterface
{

    /**
     * @var ?float
     */
    public $value;

    /**
     * @var ?string
     */
    public $type;



    /**
     * @inheritDoc
     */
    public function valid() : bool
    {
        return !is_null($value = $this->getValue());
    }


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
    public function getValue() : ?float
    {
        return $this->value;
    }



    /**
     * Subtracts log10( 2 ) from the Speed point value.
     *
     * inheritDoc
     */
    public function getSpeedLoss() : ?float
    {
        if (!is_null($value = $this->getValue()))
            return $value - log10(2);
        return null;
    }



    /**
     * Calculates the number of DIN steps for exposure compensation.
     *
     * inheritDoc
     */
    public function getEICorrection() : ?float
    {
        if (!is_null($speedloss = $this->getSpeedLoss()))
            return $speedloss * 10 * -1;
        return null;
    }

}
