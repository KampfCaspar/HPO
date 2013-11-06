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

use HPO\SPL\SoapClientFactoryInterface;
use SoapClient;

/**
 * Simple SoapClient Factory
 *
 * Simple factory class with default options
 */
class SoapClientFactory implements SoapClientFactoryInterface {

	/** default options
	 *
	 * @var array
	 */
	protected $opts;

	/** construct factory
	 *
	 * @param array $opts (optional) default options to apply to new SoapClients
	 */
	public function __construct( $opts = [ ] ) {
		$this->opts = $opts;
	}

	/**
	 * @inheritdoc
	 */
	public function createSoapClient( $wsdl, $opts = [ ] ) {
		return new SoapClient( $wsdl, $opts + $this->opts );
	}

}
