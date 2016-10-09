<?php
namespace Hirak\AllPairs\Algorithm;

class ComboTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider genCombines
     */
    public function testCombine(array $expected, array $variables)
    {
        self::assertEquals($expected, Combo::combine($variables));
    }

    public function genCombines()
    {
        yield [
            [[1,2]], 
            [1,2],
        ];

        yield [
            [[1,2],[1,3],[2,3]],
            [1,2,3],
        ];

        yield [
            [[1,2],[1,3],[1,4],[2,3],[2,4],[3,4]],
            [1,2,3,4],
        ];
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCombineWithIllegal()
    {
        Combo::combine([1]);
    }
}
