<?php
 
namespace imams2\jotaro;
 
/**
 * Basic Calculator.
 * 
 */
class BaseCalculator
{
    /**
     * Menjumlahkan semua data dalam sebuah array.
     *
     * @param array $data
     * @return integer
     */
    public static function add(array $data)
    {
        return array_sum($data);
    }
 
    /**
     * Mengalikan semua data dalam sebuah array.
     *
     * @param array $data
     * @return integer
     */
    public static function multiply(array $data)
    {
        return array_product($data);
    }
}