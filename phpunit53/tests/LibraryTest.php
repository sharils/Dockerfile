<?php
class LibraryTest extends PHPUnit_Framework_TestCase
{
    public function fibonacciSequence()
    {
        return array(
            array(1, 1),
            array(2, 1),
            array(3, 2),
            array(4, 3),
            array(5, 5),
            array(6, 8),
            array(7, 13),
            array(8, 21),
            array(9, 34)
        );
    }

    /**
     * @dataProvider fibonacciSequence
     */
    public function test($index, $fibonacci)
    {
        $this->assertSame($fibonacci, fibonacci($index));
    }
}
