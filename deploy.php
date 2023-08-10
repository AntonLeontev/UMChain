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

host('45.146.165.254')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/umchain');

task('build', function () {
    cd('{{release_path}}');
    run('npm install');
    run('npm run build');
});

// Hooks
after('deploy:publish', 'build');

after('deploy:failed', 'deploy:unlock');
