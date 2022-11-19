<?php

namespace Deployer;
require 'recipe/common.php';
// Config
set('repository', 'git@github.com:chrishubert/vroom-frontend.git');
set('ssh_multiplexing', false);
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);
set('writable_mode', 'sticky');
set('writable_recursive', true);
set('http_user', 'www-data');
set('http_group', 'www-data');
// set('writable_use_sudo', true);
task('deploy', [
    'deploy:prepare',
    'deploy:publish',
]);
// Hosts
host('194.163.167.9')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/vroom-frontend')
    ->set('sudo_password', 'YuvSfFvJyRASW2ao')
    ->set('domain', 'demo.ruterute.com')
    ->set('public_path', '')
    ->set('php_version', '8.0')
    ->set('db_type', 'mariadb')
    ->set('db_user', 'mautic')
    ->set('db_name', 'mautic')
    ->set('db_password', 'EkFS8k4inmtLPLQi');
// Hooks
after('deploy:failed', 'deploy:unlock');
