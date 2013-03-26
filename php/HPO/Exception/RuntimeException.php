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

/** Runtime Exception
 *
 * @author  Hans-Peter Oeri <hp@oeri.ch>
 * @version 0.1
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface {}
