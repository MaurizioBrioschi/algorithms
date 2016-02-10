<?php
/**
 * This file is part of the Quicksort.
 *
 * (c) Maurizio Brioschi <maurizio.brioschi@ridesoft.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
use Ridesoft\Algorithm\Quicksort\QuicksortArray;

/**
 * Class Quicksort test
 *
 * @package   ridesoft_Quicksort
 * @author    Maurizio Brioschi <maurizio.brioschi@ridesoft.org>
 * @copyright Copyright (c) 2016 Maurizio Brioschi
 * @license   https://opensource.org/licenses/MIT
 */
class QuickSortArrayTest extends PHPUnit_Framework_TestCase
{

    /**
     * test Constructor
     *
     * @dataProvider providerArray
     */
    public function testConstruct($a, $b)
    {
        $quicksortArray = new QuicksortArray($a);
        $this->assertInstanceOf("Ridesoft\\Algorithm\\Quicksort\\QuicksortArray", $quicksortArray);
    }

    /**
     * test get
     *
     * @dataProvider providerArray
     * @depends      testConstruct
     */
    public function testGet($a, $b)
    {
        $quicksortArray = new QuicksortArray($a);
        $this->assertEquals($a, $quicksortArray->getArray());
    }

    /**
     * test set
     *
     * @dataProvider providerArray
     * @depends      testGet
     */
    public function testSet($a, $b)
    {
        $quicksortArray = new QuicksortArray();
        $quicksortArray->setArray($a);
        $this->assertEquals($a, $quicksortArray->getArray());
    }


    /**
     * @dataProvider providerArray
     */
    public function testSortedArray($a, $b)
    {
        $quicksortArray = new QuicksortArray($a);
        $sorted = $quicksortArray->getSortedArray();
        $this->assertEquals($b, $sorted);
    }

    public function providerArray()
    {
        $a = [];
        for ($i = 999; $i >= 0; $i--) {
            array_push($a, $i);
        }
        $b = [];
        for ($i = 0; $i < 1000; $i++) {
            array_push($b, $i);
        }

        $tests = [
            [
                [],
                []
            ],
            [
                [5, 7, 200, 300, 1, 2, 90, 7, 2000, 69, 50, 30, 9, 11],
                [1, 2, 5, 7, 7, 9, 11, 30, 50, 69, 90, 200, 300, 2000]
            ],
            [
                ['f', 'e', 'd', 'c', 'b', 'a'],
                ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            [
                $a,
                $b
            ]
        ];

        return $tests;
    }
}

