<?php
/**
 * Copyright (c) 2013, Tom Needham <tom@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */

$this->create('ajax_adminrecovery', 'ajax/adminrecovery.php')
	->actionInclude('files_encryption/ajax/adminrecovery.php');
$this->create('ajax_changeRecoveryPassword', 'ajax/changeRecoveryPassword.php')
	->actionInclude('files_encryption/ajax/changeRecoveryPassword.php');
$this->create('ajax_getMigrationStatus', 'ajax/getMigrationStatus.php')
	->actionInclude('files_encryption/ajax/getMigrationStatus.php');
$this->create('ajax_updatePrivateKeyPassword', 'ajax/updatePrivateKeyPassword.php')
	->actionInclude('files_encryption/ajax/updatePrivateKeyPassword.php');
$this->create('ajax_userrecovery', 'ajax/userrecovery.php')
	->actionInclude('files_encryption/ajax/userrecovery.php');

// Register with the capabilities API
OC_API::register('get', '/cloud/capabilities', array('OCA\Encryption\Capabilities', 'getCapabilities'), 'files_encryption', OC_API::USER_AUTH);
