<?php

namespace App\Installer;

use Roots\Sage\Installer\ComposerScript as RootsComposerScript;
use Composer\Script\Event;
use Symfony\Component\Process\Process;
class ComposerScript extends RootsComposerScript
{
    /**
     * Override the Sage hook to exclude the preset override
     *
     * @see Roots\Sage\Installer\ComposerScript::postCreateProject
     *
     * @param Event $event
     * @return void
     */
    public static function postCreateProject(Event $event)
    {
        $sage = escapeshellarg(dirname(__DIR__, 2) . '/vendor/roots/sage-installer/bin/sage');
        (new static($event))
            ->validate()
            ->run(new Process(sprintf('php %s %s', $sage, 'meta')))
            ->run(new Process(sprintf('php %s %s', $sage, 'config')));
    }

    /**
     * Look for any slab-plugin-* packages and install them
     */
    public static function copyPluginConfigs(Event $event)
    {
       $plugins = ['stirling-brandworks/shelf'];

       foreach ($plugins as $plugin) {
           if (!\Composer\InstalledVersions::isInstalled($plugin)) {
               continue;
           }

           $installPath = \Composer\InstalledVersions::getInstallPath($plugin);
           $slug = basename($installPath);
           $exampleConfigPath = $installPath . "/$slug-example.yml";

           if (file_exists($exampleConfigPath) && !file_exists("./$slug.yml")) {
                (new static($event))
                    ->run(new Process(sprintf("php -r \"copy('%s', '%s');\"", $exampleConfigPath, "./$slug.yml")));
           }
       }
    }
}
