<?php
/**
 * Nextcloud - Dashboard Charting app
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Mark Partlett <mark@partlettconsulting.com.au>
 * @copyright 2019, Mark Partlett <mark@partlettconsulting.com.au>
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCA\DashboardCharts\Service\Widgets\Test1;

use OCA\DashboardCharts\Service\ConfigService;
use OCA\DashboardCharts\Service\MiscService;
use OCA\DashboardCharts\Db\DataRequest;

class Test1Service {

	const TEST1_FILE = __DIR__ . '/../../../../test1.json';

	private $userId;
	/** @var ConfigService */
	private $configService;

	/** @var MiscService */
	private $miscService;
	
	/** @var DataRequest */
	private $dataRequest;
		
	

	/**
	 * ProviderService constructor.
	 *
	 * @param ConfigService $configService
	 * @param MiscService $miscService
	 * @param DataMapper $dataMapper
	 *
	 */
	public function __construct(ConfigService $configService,$userId, MiscService $miscService, DataRequest $dataRequest ) {
		$this->configService = $configService;
		$this->userId = $userId;
		$this->miscService = $miscService;
		$this->dataRequest = $dataRequest;
		}


	public function getRandomTest1Data()  {

	$widgetId ='Test1';
	//$userId = 'admin';
	$userId = $this->userId;

	$Test1Data = $this->dataRequest->get($widgetId, $userId );
	
		
	//	return json_encode($Test1Data);
		return ($Test1Data);
	}

	/**
	 * @return array
	 */
	public function getTest1Data() {
		$content = file_get_contents(self::TEST1_FILE);
	//	$Test1Data = explode('%', $content);
        $Test1Data = "Hello world";
		return $Test1Data;
	}

}