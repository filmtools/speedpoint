<?php
namespace FilmTools\SpeedPoint;

class SpeedPointFactory
{

    /**
     * @var string|null
     */
    protected $speedpoint_type;

    /**
     * @var string FQDN
     */
    protected $php_class;


    /**
     * @param string|null $speedpoint_type Short SpeedPoint description that all generated instances have in common.
     * @param string|null $php_class       FQDN of a SpeedPoint class
     */
    public function __construct( ?string $speedpoint_type = null, ?string $php_class = null)
    {
        $this->php_class = $php_class ?: SpeedPoint::class;
        $this->speedpoint_type = $speedpoint_type;
    }

    /**
     * @param  float      $logH       Exposure value
     * @param  string|null $php_class  Optional: FQDN of a SpeedPoint class
     * @return SpeedPointInterface
     */
    public function __invoke( float $logH, ?string $php_class = null )
    {
        $php_class = $php_class ?: $this->php_class;
        return new $php_class( $logH, $this->speedpoint_type );
    }
}
