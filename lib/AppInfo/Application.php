<?php

declare(strict_types=1);

/**
 * FullTextSearch_OpenSearch - Use OpenSearch to index the content of your nextcloud
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2018
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

namespace OCA\FullTextSearch_OpenSearch\AppInfo;

use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap {

	public const APP_NAME = 'fulltextsearch_opensearch';

    /**
     * Constructor method for the class.
     *
     * @param array $params Optional parameters for initializing the class.
     * @return void
     */
	public function __construct(array $params = []) {
		parent::__construct(self::APP_NAME, $params);
	}

    /**
     * Registers the given context within the system.
     *
     * @param IRegistrationContext $context The context to be registered.
     * @return void
     */
	final public function register(IRegistrationContext $context): void {
	}

    /**
     * Bootstraps the application with the provided context.
     *
     * @param IBootContext $context The context required for bootstrapping the application.
     * @return void
     */
	final public function boot(IBootContext $context): void {
	}
}
