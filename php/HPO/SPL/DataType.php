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
namespace HPO\SPL;

/**
 * Simple Base Class for DataType classes
 *
 */
class DataType {

	/** construct data type
	 * @param array $assignments (optional) initial property assignments
	 */
	public function __construct( $assignments = null ) {
		if ( $assignments ) {
			$this->set( $assignments );
		}
	}

	/** set multiple properties at once
	 * @param array $assignments  array of assignments
	 * @return static
1	 */
	public function set( $assignments ) {
		foreach ( $assignments as $key => $val ) {
			$this->$key = $val;
		}
		return $this;
	}

}
