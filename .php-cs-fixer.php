<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())
	->notPath('bootstrap/cache')
	->notPath('storage')
	->notPath('vendor')
	->in(__DIR__)
	->name('*.php')
	->notName('*.blade.php')
	->ignoreDotFiles(true)
	->ignoreVCS(true);

return (new Config())
	->setRules([
		'@PSR12' => true,
		'array_syntax' => ['syntax' => 'short'],
		'blank_line_before_statement' => true,
		'cast_spaces' => ['space' => 'none'],
		'concat_space' => ['spacing' => 'one'],
		'control_structure_continuation_position' => ['position' => 'next_line'],
		'function_typehint_space' => true,
		'list_syntax' => ['syntax' => 'short'],
		'lowercase_static_reference' => true,
		'no_empty_statement' => true,
		'no_extra_blank_lines' => true,
		'no_unused_imports' => true,
		'no_useless_return' => true,
		'not_operator_with_successor_space' => true,
		'ordered_imports' => true,
		'php_unit_method_casing' => ['case' => 'snake_case'],
		'phpdoc_align' => ['align' => 'left'],
		'phpdoc_annotation_without_dot' => true,
		'phpdoc_order' => true,
		'phpdoc_scalar' => true,
		'phpdoc_summary' => true,
		'phpdoc_trim_consecutive_blank_line_separation' => true,
		'phpdoc_trim' => true,
		'single_blank_line_at_eof' => true,
		'single_blank_line_before_namespace' => true,
		'ternary_operator_spaces' => true,
		'trailing_comma_in_multiline' => ['elements' => ['arrays', 'arguments', 'parameters']],
	])
	->setIndent("\t")
	->setLineEnding("\n")
	->setFinder($finder);
