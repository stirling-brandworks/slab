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
        $sage = escapeshellarg(dirname(__DIR__, 2) . '/vendor/roots/sage-installer/bin/slab');
        (new static($event))
            ->validate()
            ->run(new Process(sprintf('php %s %s', $sage, 'meta')))
            ->run(new Process(sprintf('php %s %s', $sage, 'config')));
    }
}
