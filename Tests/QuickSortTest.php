<?php
require('quicksort.php');
ini_set('xdebug.max_nesting_level',10000);
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
        $limit = 1000;
        $array2 = [];
        for($i=$limit;$i>0;$i--)  {
            array_push($array2, $i);
        }
        $array2sorted = [];
        for($i=1;$i<=$limit;$i++)    {
            array_push($array2sorted,$i);
        }
        $this->assertEquals($array2sorted, quicksort($array2));
        
        $array3 = ['f','e','d','c','b','a'];
        $this->assertEquals(['a','b','c','d','e','f'], quicksort($array3));
    }
}
