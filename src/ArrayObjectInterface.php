<?php


namespace Ixolit\Interoperability;

/**
 * This interface can be used for a replacement of the built-in ArrayObject class to pass array-compatible objects
 * to functions. All functions using the interoperability framework SHOULD accept both the ArrayObjectInterface and
 * the PHP-native ArrayObject.
 *
 * Type documentation using this class should be made as `array|ArrayObjectInterface|\ArrayObject`
 *
 * @package Ixolit\Interoperability
 */
interface ArrayObjectInterface extends \IteratorAggregate, \ArrayAccess, \Serializable, \Countable {

}
