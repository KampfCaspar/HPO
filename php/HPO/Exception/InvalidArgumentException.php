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
namespace HPO\Exception;
use HPO\ExceptionInterface;
use HPO\Object as o;

/** Inavlid Argument Exception
 *
 * @author  Hans-Peter Oeri <hp@oeri.ch>
 * @version 0.1
 */
class InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface {

	/** get type mismatch exception message
	 * @param string|array  $types     expected type names
	 * @param mixed         $real      actual value
	 */
	static public function getMsgType( $types, $real ) {
		return sprintf( 'expected one of %s, but got %s', $types, o::getType($real) );
	}

}
