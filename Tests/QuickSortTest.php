<?php
require('quicksort.php');
/**
 * Description of QuickSortTest
 *
 * @author Maurizio Brioschi<maurizio.brioschi@ridesoft.org>
 */
class QuickSortTest extends PHPUnit_Framework_TestCase
{
    public function testQuickSort(){
        $array = [5,7,200,300,1,2,90,7,2000,69,50,30,9,11];
        $this->assertEquals([1,2,5,7,7,9,11,30,50,69,90,200,300,2000], quicksort($array));
    }
}
