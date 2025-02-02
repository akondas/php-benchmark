<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement' => true,
        'cast_spaces' => true,
        'concat_space' => ['spacing' => 'none'],
        'declare_strict_types' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_spaces_around_offset' => ['positions' => ['inside', 'outside']],
        'no_unneeded_control_parentheses' => true,
        'no_unused_imports' => true,
        'phpdoc_align' => true,
        'phpdoc_no_access' => true,
        'phpdoc_separation' => true,
        'increment_style' => ['style' => 'pre'],
        'single_quote' => true,
        'trim_array_spaces' => true,
        'single_blank_line_before_namespace' => true
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/benchmarks')
    )
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
;
