<?php
namespace FilmTools\SpeedPoint;

abstract class SpeedPointDecoratorAbstract implements SpeedPointProviderInterface, SpeedPointInterface
{

    /**
     * @var SpeedPointInterface
     */
    public $speedpoint;


    /**
     * @param SpeedPointProviderInterface|SpeedPointInterface $speedpoint
     */
    public function __construct( $speedpoint)
    {
        if ($speedpoint instanceOf SpeedPointProviderInterface):
            $this->speedpoint = $speedpoint->getSpeedPoint();
        elseif ($speedpoint_provider instanceOf SpeedPointInterface):
            $this->speedpoint = $speedpoint;
        else:
            throw new \InvalidArgumentException("SpeedPointInterface or SpeedPointProviderInterface expected");
        endif;
    }


    /**
     * Returns the Decorator instance.
     *
     * @inheritDoc
     * @return SpeedPointDecoratorAbstract
     */
    public function getSpeedPoint() : SpeedPointInterface
    {
        return $this;
    }


    /**
     * @inheritDoc
     */
    public function valid() : bool
    {
        return $this->speedpoint->valid();
    }


    /**
     * @inheritDoc
     */
    public function getType() : ?string
    {
        return $this->speedpoint->getType();
    }


    /**
     * @inheritDoc
     */
    public function getValue() : ?float
    {
        return $this->speedpoint->getValue();
    }


    /**
     * @inheritDoc
     */
    public function getSpeedLoss() : ?float
    {
        return $this->speedpoint->getSpeedLoss();
    }


    /**
     * @inheritDoc
     */
    public function getEICorrection() : ?float
    {
        return $this->speedpoint->getEICorrection();
    }


}
