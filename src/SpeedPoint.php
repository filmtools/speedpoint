<?php
namespace FilmTools\SpeedPoint;

class SpeedPoint extends SpeedPointAbstract implements SpeedPointInterface, SpeedPointProviderInterface
{

    /**
     * @param float  $logH  Exposure value
     * @param string $type  Short description
     */
    public function __construct( ?float $logH, ?string $type = null)
    {
        $this->value = $logH;
        $this->type = $type;
    }


    /**
     * @inheritDoc
     */
    public function getSpeedPoint(): SpeedPointInterface
    {
        return $this;
    }


    /**
     * @return mixed[]
     */
    public function __debugInfo() : array
    {
        return [
            'type'          => $this->type,
            'value'         => $this->value,
            'valid'         => $this->valid(),
            'speed_loss'    => $this->getSpeedLoss(),
            'ei_correction' => $this->getEICorrection()
        ];
    }
}
