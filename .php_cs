<?php

return Symfony\Component\Finder\Finder::create()
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->exclude('vendor')
    ->exclude('.temp') // this directory is only used local.
    ->exclude('Tests/Fixtures')
    ->in(__DIR__)
    ;
