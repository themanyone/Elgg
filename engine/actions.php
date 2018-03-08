<?php

return [
	'admin/delete_admin_notice' => ['access' => 'admin'],
	'admin/delete_admin_notices' => ['access' => 'admin'],
	'admin/menu/save' => ['access' => 'admin'],
	'admin/plugins/activate' => ['access' => 'admin'],
	'admin/plugins/activate_all' => ['access' => 'admin'],
	'admin/plugins/deactivate' => ['access' => 'admin'],
	'admin/plugins/deactivate_all' => ['access' => 'admin'],
	'admin/plugins/set_priority' => ['access' => 'admin'],
	'admin/security/settings' => ['access' => 'admin'],
	'admin/security/regenerate_site_secret' => ['access' => 'admin'],
	'admin/site/flush_cache' => ['access' => 'admin'],
	'admin/site/set_maintenance_mode' => ['access' => 'admin'],
	'admin/site/set_robots' => ['access' => 'admin'],
	'admin/site/unlock_upgrade' => ['access' => 'admin'],
	'admin/site/update_basic' => ['access' => 'admin'],
	'admin/site/update_advanced' => ['access' => 'admin'],
	'admin/upgrade' => ['access' => 'admin'],
	'admin/upgrades/upgrade_database_guid_columns' => ['access' => 'admin'],
	'admin/user/ban' => ['access' => 'admin'],
	'admin/user/bulk/delete' => ['access' => 'admin'],
	'admin/user/bulk/validate' => ['access' => 'admin'],
	'admin/user/delete' => ['access' => 'admin'],
	'admin/user/makeadmin' => ['access' => 'admin'],
	'admin/user/resetpassword' => ['access' => 'admin'],
	'admin/user/removeadmin' => ['access' => 'admin'],
	'admin/user/unban' => ['access' => 'admin'],
	'admin/user/validate' => ['access' => 'admin'],
	'avatar/upload' => [],
	'avatar/crop' => [],
	'avatar/remove' => [],
	'comment/save' => [],
	'entity/delete' => [],
	'login' => ['access' => 'public'],
	'logout' => [],
	'plugins/settings/save' => ['access' => 'admin'],
	'plugins/usersettings/save' => [],
	'register' => ['access' => 'public'],
	'river/delete' => [],
	'user/changepassword' => ['access' => 'public'],
	'user/requestnewpassword' => ['access' => 'public'],
	'useradd' => ['access' => 'admin'],
	'usersettings/save' => [],
	'widgets/add' => [],
	'widgets/delete' => [],
	'widgets/move' => [],
	'widgets/save' => [],
];
