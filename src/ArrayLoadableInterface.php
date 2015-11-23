<?php


namespace Ixolit\Interoperability;

/**
 * This interface states that an object can be filled with data from an array.
 *
 * @package Ixolit\Interoperability
 */
interface ArrayLoadableInterface {
	/**
	 * This function will load the class with data from an array.
	 *
	 * @param array $data
	 *
	 * @throws ArrayConversionExceptionInterface if an error happened during the conversion.
	 */
	public function fromArray($data);
}
