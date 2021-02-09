<?php

namespace Yuzu\Effiliation\Tests\Units\Request;

use atoum\atoum;
use Yuzu\Effiliation\Enum\RegistrationStateTypeEnum;

class GetProgrammesDefinition extends atoum\test
{
    public function testConstruct()
    {
        $this->given(
                $options = array(
                    'filter' => RegistrationStateTypeEnum::ALL
                )
            )
            ->if($this->newTestedInstance($options))
            ->then
            ->object($this->testedInstance)->isTestedInstance()
        ;
    }

    public function testConstructWithParams()
    {
        $this
            ->given(
                $options = array(
                    'filter' => RegistrationStateTypeEnum::MINES,
                    'lg' => 'fr'
                )
            )
            ->if($this->newTestedInstance($options))
                ->then
                    ->object($this->testedInstance)->isTestedInstance()
        ;
    }

    public function testConstructWithWrongParams()
    {
        $this
            ->exception(
                function () {
                    $options = array(
                        'wrongParam' => 'wrongValue'
                    );
                    $this->newTestedInstance($options);
                }
            )
        ;
    }
}
