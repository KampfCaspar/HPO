<?php
/*
  This file is part of HPO Toolbox.

  HPO Toolbox is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  HPO Toolbox is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with HPO Toolbox.  If not, see <http://www.gnu.org/licenses/>.
*/
namespace HPO\Type;
use HPO\Exception\DomainException,
	HPO\Exception\InvalidArgumentException;

/** get class or type name of parameter
 * @param  mixed   $mixed  value to get type of
 * @return string
 */
function getType( $mixed ) {
	return (is_object($mixed) ? get_class($mixed) : '(' . gettype($mixed) . ')');
}

/** check if param supports array access
 * @param  mixed   $mixed  value to test for array access
 * @return boolean
 */
function isArray( $mixed ) {
	return is_array($mixed) || ($mixed instanceof \ArrayAccess);
}

/** convert parameter to simple array
 * @param  mixed  $mixed  value to convert to array
 * @return array
 * @throws \HPO\Exception\InvalidArgumentException  if unable to convert given object
 */
function toArray( $mixed ) {
	if ( !is_object($mixed) ) {
		$res = (array)$mixed;
	}
	elseif ( $mixed instanceof \ArrayObject ) {
		$res = $mixed->getArrayCopy();
	}
	elseif ( $mixed instanceof \Traversable ) {
		$res = iterator_to_array( $mixed, true );
	}
	elseif ( method_exists( $mixed, 'toArray' ) ) {
		$res = $mixed->toArray();
	}
	else {
		throw new InvalidArgumentException( sprintf( 'cannot cast "%s" to array', self::getType($mixed) ) );
	}

	return $res;
}

/** check if object is one of the given types
 * @param object                     $mixed  object to test
 * @param \Traversable|array|string  $types  expected class/interface name(s)
 * @return string|false              first class or interface name to match or false if none matches
 */
function isOfType( $mixed, $types ) {
	$types = is_scalar($types) ? array( $types ) : $types;
	foreach ( $types as $one ) {
		if ( is_a( $mixed, $one ) ) {
			return $one;
		}
	}
	return false;
}
