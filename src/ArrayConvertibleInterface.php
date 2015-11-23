<?php

namespace Ixolit\Interoperability;

/**
 * This interface states that an object can be converted to an array and will do so for all sub-objects recursively.
 *
 * @package Ixolit\Interoperability
 */
interface ArrayConvertibleInterface {
	/**
	 * Convert this object to an array, including all sub-objects.
	 *
	 * @return array
	 *
	 * @throws ArrayConversionExceptionInterface if an error happened during the conversion.
	 */
	public function toArray();
}
