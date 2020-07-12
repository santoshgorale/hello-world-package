<?php

namespace HelloWorld;

class HelloWorld
{
    public function getHelloWorld()
    {
        return 'Hello World';
    }

    public function display()
    {
        return $this->getHelloWorld();
    }
}
