<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/AntonLeontev/UMChain.git');
set('keep_releases', 3);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

// test.server
host('94.241.174.226')
    ->set('remote_user', 'deployer')
    ->set('branch', 'dev')
    ->set('deploy_path', '~/umfit');

//production
// host('81.177.139.224')
//     ->set('remote_user', 'deployer')
//     ->set('branch', 'master')
//     ->set('deploy_path', '~/umchain');

// Tasks

task('build', function () {
    cd('{{release_path}}');
    run('npm install');
    run('npm run build');
});

task('cache_routes', function () {
    cd('{{release_path}}');
    run('php artisan route:clear');
    run('php artisan route:trans:cache');
});

task('reboot', function () {
    run('sudo reboot');
});

// Hooks
after('deploy:vendors', 'build');
after('artisan:route:cache', 'cache_routes');
// after('deploy:unlock', 'reboot');

after('deploy:failed', 'deploy:unlock');
