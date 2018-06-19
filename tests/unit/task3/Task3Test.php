<?php

namespace task3;

use Codeception\Stub\Expected;
use Emitter;
use FunctionMock;

class Task3Test extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testEmitterShouldWorkWithSingleEventAndSingleHandler()
    {
        $emitter = new Emitter();
        $data = null;
        $handler = $this->make('FunctionMock', ['__invoke' => Expected::once($data)]);
        $emitter->on('event', $handler);
        $emitter->emit('event', $data);
    }

    public function testEmitterShouldWorkWithMultipleEventsAndSingleHandler()
    {
        $emitter = new Emitter();
        $data = null;
        $handler1 = $this->make('FunctionMock', ['__invoke' => Expected::once($data)]);
        $handler2 = $this->make('FunctionMock', ['__invoke' => Expected::once($data)]);
        $handler3 = $this->make('FunctionMock', ['__invoke' => Expected::once($data)]);
        $emitter->on('event', $handler1);
        $emitter->on('event', $handler2);
        $emitter->on('event', $handler3);
        $emitter->emit('event', $data);
    }

    public function testEmitterShouldWorkWithMultipleEventsAndSingleHandle()
    {
        $emitter = new Emitter();
        $data = null;
        $handler1 = $this->make('FunctionMock', ['__invoke' => Expected::once($data)]);
        $handler2 = $this->make('FunctionMock', ['__invoke' => Expected::once($data)]);
        $handler3 = $this->make('FunctionMock', ['__invoke' => Expected::once($data)]);
        $emitter->on('event1', $handler1);
        $emitter->on('event2', $handler2);
        $emitter->on('event3', $handler3);
        $emitter->emit('event1', $data);
        $emitter->emit('event2', $data);
        $emitter->emit('event3', $data);
    }

    public function testEmitterShouldNotCallHandlerIfTriggeredNotBindedEvent()
    {
        $emitter = new Emitter();
        $data = null;
        $handler = $this->make('FunctionMock', ['__invoke' => Expected::never($data)]);
        $emitter->on('event', $handler);
        $emitter->emit('event1', $handler);
    }
}