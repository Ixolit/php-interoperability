# IXOLIT PHP Interoperability Package

This package declares the common interfaces used among Ixolit packages. It is intended as an interoperability framework
for our projects.

## Interface overview

### Array conversion

These interfaces help you with converting an object from- and to an array.

- **ArrayConversionExceptionInterface**: All exceptions that happen during a conversion should implement this interface.
- **ArrayConvertibleInterface**: Declares the toArray() method.
- **ArrayLoadableInterface**: Declares the fromArray() method.
- **ArraySerializableInterface**: Declares both the toArray() and fromArray() interface.
- **ArrayObjectInterface**: An interface that implements all interfaces from the built-in \ArrayObject class to help 
  with creating array-compatible classes.

### PHP-FIG

This package also pulls in the latest PHP-FIG packages to aid in interoperability:

- psr/log
- psr/http-message

## Contributing

All contributions are welcome. Please follow the following rules:

- Only interfaces, no specific implementations.
- All interfaces and methods need to be documented according to their intent.
- All names should be unambiguous regarding their function, even without reading the documentation.
- All contributions are made unter the MIT open source license.
