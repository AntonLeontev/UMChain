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
// host('45.146.165.254')
//     ->set('remote_user', 'deployer')
//     ->set('deploy_path', '~/umchain');

//production
host('81.177.139.224')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/umchain');

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

// Hooks
after('deploy:vendors', 'build');
after('artisan:route:cache', 'cache_routes');

after('deploy:failed', 'deploy:unlock');
