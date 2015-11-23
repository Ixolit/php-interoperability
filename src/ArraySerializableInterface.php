<?php


namespace Ixolit\Interoperability;

/**
 * This interface declares that a class can both be converted to and loaded from an array.
 *
 * @package Ixolit\Interoperability
 */
interface ArraySerializableInterface extends ArrayLoadableInterface, ArrayConvertibleInterface {

}
