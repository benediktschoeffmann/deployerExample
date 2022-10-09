<?php
/**
 * Doc comment
 * 
 * @category    Bla
 * @package     Deployer
 * @author      Ben Schöffmann <ben@medani.at>
 * @license     none https://www.none.org
 * @link        https://www.none.org
 */
namespace Deployer;

# import PrestaShop recipes (which in return import common recipes etc. ) 
require 'vendor/deployer/deployer/recipe/prestashop.php';

# import hosts
import('config/hosts.yml');

/**
 * Task definitions
 */
task(
    'info', 
    function () {
        writeln('type:' . get('labels')['type'] . ' env:' . get('labels')['env']);
    }
)->desc('Shows types of hosts');

task(
    'remoteuser', 
    function () {
        writeln("\tremoteuser: " . get('remote_user'));
    }
)->desc('Shows remote users on every host');



    // ->set('remote_user', 'deployer')
    // ->set('deploy_path', '~/deployer');

// Hooks

// after('deploy:failed', 'deploy:unlock');
