<?php

namespace Yuzu\Effiliation\Tests\Units\Request;

use mageekguy\atoum;

class GetTransactionsDefinition extends atoum\test
{
    public function testConstruct()
    {
        $this
            ->if($this->newTestedInstance())
            ->then
            ->object($this->testedInstance)->isTestedInstance()
        ;
    }

    public function testConstructWithParams()
    {
        $this
            ->given(
                $options = array(
                    'all' => 'yes',
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
