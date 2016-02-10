<?php
/**
 * QuicksortArray File sort an array using Quicksort
 *
 * PHP version 5.4
 *
 * @category  QuicksortArray
 * @package   Ridesoft_Quicksort
 * @author    Maurizio Brioschi <maurizio.brioschi@ridesoft.org>
 * @copyright 2016 Maurizio Brioschi
 * @license   MIT   https://opensource.org/licenses/MIT
 * @version   Release: @package_version@
 * @link      https://github.com/MaurizioBrioschi
 *
 * (c) Maurizio Brioschi <maurizio.brioschi@ridesoft.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Ridesoft\Algorithm\Quicksort;
/**
 * QuicksortArray Class sort an array using Quicksort
 *
 * Quicksort is an efficient sorting algorithm base on the paradigm divide et impera
 * Is the best algorithm base on comparison
 * Best case: Θ (n log n)
 * Bad case: Θ (n^2)
 *
 * @category  Class
 * @package   Ridesoft_Quicksort
 * @author    Maurizio Brioschi <maurizio.brioschi@ridesoft.org>
 * @copyright 2016 Maurizio Brioschi
 * @license   MIT   https://opensource.org/licenses/MIT
 * @version   Release: 1.0
 * @link      https://github.com/MaurizioBrioschi
 *
 */
class QuicksortArray
{
    /**
     * @var array
     */
    protected $array;

    /**
     * QuicksortArray constructor.
     *
     * @param array $array array to sort
     */
    public function __construct(array $array = [])
    {
        $this->array = $array;
    }

    /**
     * Set the array to sort
     *
     * @param array $array array to sort
     *
     * @return void
     */
    public function setArray(array $array)
    {
        $this->array = $array;
    }

    /**
     * Get the object array
     *
     * @return array
     */
    public function getArray()
    {
        return $this->array;
    }

    /**
     * Get the array sorted by Quicksort algorithm
     *
     * @return array
     */
    public function getSortedArray()
    {
        $count = count($this->array);
        if ($count > 250) {
            ini_set('xdebug.max_nesting_level', $count * 100);
        }
        $this->array = $this->applyAlgorithm($this->array);
        ini_set('xdebug.max_nesting_level', 256);
        return $this->getArray();
    }

    /**
     * Apply Quicksort algorithm
     *
     * @param array $array array to sort
     *
     * @return array array sorted
     */
    protected function applyAlgorithm(array $array)
    {
        if (count($array) < 2) {
            return $array;
        }
        $left = $right = array();
        reset($array);
        $pivot_key = key($array);
        $pivot = array_shift($array);
        foreach ($array as $k => $v) {
            if ($v < $pivot)
                $left[$k] = $v;
            else
                $right[$k] = $v;
        }
        return array_merge($this->applyAlgorithm($left),
            array($pivot_key => $pivot),
            $this->applyAlgorithm($right));
    }
}

