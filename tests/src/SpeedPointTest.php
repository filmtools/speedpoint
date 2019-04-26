<?php
namespace tests;

use FilmTools\SpeedPoint\SpeedPoint;
use FilmTools\SpeedPoint\SpeedPointInterface;
use FilmTools\SpeedPoint\SpeedPointProviderInterface;

class SpeedPointTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @dataProvider provideCtorArgs
     */
    public function testInstantiation( $logH, $type)
    {
        $sut = new SpeedPoint( $logH, $type );
        $this->assertInstanceOf( SpeedPointInterface::class, $sut);
        $this->assertInstanceOf( SpeedPointProviderInterface::class, $sut);
        $this->assertInstanceOf( SpeedPointInterface::class, $sut->getSpeedPoint() );
        $this->assertTrue( $sut->valid() );

        $debug_info = $sut->__debugInfo();
        $this->assertTrue($debug_info['valid'] );

    }

    public function provideCtorArgs()
    {
        return [
            [ 0.5, "SomeType" ],
            [ 0.5, null ]
        ];
    }


    public function testValid()
    {
        $sut = new SpeedPoint(null, null);
        $this->assertFalse( $sut->valid() );

        $debug_info = $sut->__debugInfo();
        $this->assertFalse($debug_info['valid'] );
    }



    /**
     * @dataProvider provideCtorArgs
     */
    public function testGetters( $logH, $type)
    {
        $sut = new SpeedPoint( $logH, $type );

        $this->assertEquals( $type, $sut->getType());
        $this->assertEquals( $logH, $sut->getValue());

        $this->assertInternalType( "float", $sut->getSpeedLoss());
        $this->assertInternalType( "float", $sut->getEICorrection());
        $this->assertInternalType( "float", $sut->getValue());
    }



}
