<?php
// this config file created by HTAN v{HTAN_Version}

// config
$config = [];

// active modules (separated by commas)
// for example: users,svn,sites,files,monitoring,services,ssh
$config['modules'] = '{modules}';

// the list of widgets to display on the main page
$config['widgets']['monitoring'] = ['Enabled' => TRUE];
$config['widgets']['services'] = ['Enabled' => TRUE, 'Format' => '<div>%s</div>', 'NgInit' => 'SearchString = \'{WServices_SearchString}\'; Load()' ];
$config['widgets']['sites'] = ['Enabled' => TRUE, 'Format' => '<div>%s</div>'];

// SmallServerAdmin
// $config['ssa_log_path'] = 'ssa.log';

// ssh
$config['ssh_host'] = '{ssh_host}';
$config['ssh_port'] = '{ssh_port}';
$config['ssh_user'] = '{ssh_user}';
$config['ssh_password'] = '{ssh_password}';
$config['ssh_required_password'] = {ssh_required_password};

// files
$config['files_auto_reload'] = [
  // allow sudo systemctl daemon-reload
  'daemon' => TRUE,
  // allow sudo service apache2 reload
  'apache' => TRUE,
  // allow sudo service nginx reload
  'nginx' => TRUE
];

// subversion
$config['svn_authz'] = '/etc/apache2/dav_svn.authz';
$config['svn_passwd'] = '/etc/apache2/dav_svn.passwd';
$config['svn_repositories'] = '/var/svn/';
$config['svn_default_group'] = 'everyone';
$config["svn_username_pattern"] = '^([A-Za-z]+)([A-Za-z0-9_.-]*)$';
$config["svn_username_invalid_message"] = 'The username can contain letters of the English alphabet, numbers, hyphens and underscores. The username must start with a letter.';
$config["svn_password_pattern"] = '^(.{1,24})$';
$config["svn_password_invalid_message"] = 'The password must contain 1 to 24 characters.';
$config["svn_groupname_pattern"] = '^([A-Za-z]+)([A-Za-z0-9_.-]*)$';
$config["svn_groupname_invalid_message"] = 'The name can contain letters of the English alphabet, numbers, hyphens and underscores. The name must start with a letter.';

// web server
$config['web_mode'] = 'nginx+apache'; // nginx+apache | nginx | apache
$config['web_apache_path'] = '/etc/apache2';
$config['web_nginx_path'] = '/etc/nginx';
$config['web_htan_enabled'] = {web_htan_enabled}; // true if htan-runner is installed; otherwise false
$config['web_htan_path'] = '/etc/htan';
$config["web_sitename_pattern"] = '^([A-Za-z0-9_-]+)([A-Za-z0-9_.-]*)$';
$config["web_sitename_invalid_message"] = 'Site name must begin with the letters of the English alphabet or numbers. The name must not contain special characters, except for: dash, the underscore character and dot.';

// dbadmin
$config['dbadmin_list'] = [ {dbadmin_list} ];


// client-side config
$config['client'] = [
  'WebServer' => 'nginx+apache',
  'ApacheHost' => '{ApacheHost}',
  'ApachePort' => {ApachePort},
  'LogFolderName' => '.logs',
  'PhpFastCgiPort' => {PhpFastCgiPort},
  'AspNetFastCgiPort' => {AspNetFastCgiPort},
  'ServerAddress' => $config['ssh_host'],
  'ServerName' => $config['server_name']
];