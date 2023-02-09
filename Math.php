<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author		ACME Development
 * @version		1.0
 */
 
class Math {

	// some useless constants
	public const PI = 3.14;
	public const ZERO = 0;

	/**
	 * Returns the sum of two numbers
	 *
	 * @param float $a
	 * @param float $b
	 * @return float
	 */

	// this is multiplication as well
    public static function mult($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }

	// this is addition
	public static function add($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}

	// this is subtraction
	public static function subtract($num1, $num2){
		$diff = $num1 - $num2;
		return $diff;
	}

	// this is multiplication 
    public static function multiplication($num1, $num2){
        $result = $num1 * $num2;
        return $result;
    }

	// this is division
    public static function division($num1, $num2){
        $answer = $num2 / $num1;
        return $answer;
    }
}