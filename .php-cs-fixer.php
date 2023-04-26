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
		'align_multiline_comment' => true,
		'array_indentation' => true,
		'array_syntax' => ['syntax' => 'short'],
		'blank_line_before_statement' => true,
		'cast_spaces' => ['space' => 'none'],
		'combine_consecutive_issets' => true,
		'combine_consecutive_unsets' => true,
		'concat_space' => ['spacing' => 'one'],
		'explicit_indirect_variable' => true,
		'explicit_string_variable' => true,
		'control_structure_continuation_position' => ['position' => 'next_line'],
		'function_typehint_space' => true,
		'lambda_not_used_import' => true,
		'list_syntax' => ['syntax' => 'short'],
		'lowercase_static_reference' => true,
		'method_chaining_indentation' => true,
		'no_blank_lines_after_phpdoc' => true,
		'no_empty_phpdoc' => true,
		'no_empty_statement' => true,
		'no_extra_blank_lines' => true,
		'no_spaces_around_offset' => true,
		'no_unused_imports' => true,
		'no_useless_return' => true,
		'not_operator_with_successor_space' => true,
		'object_operator_without_whitespace' => true,
		'ordered_imports' => ['sort_algorithm' => 'alpha', 'imports_order' => ['class', 'function', 'const']],
		'php_unit_method_casing' => ['case' => 'snake_case'],
		'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
		'phpdoc_align' => ['align' => 'left'],
		'phpdoc_annotation_without_dot' => true,
		'phpdoc_order' => true,
		'phpdoc_scalar' => true,
		'phpdoc_single_line_var_spacing' => true,
		'phpdoc_summary' => true,
		'phpdoc_trim_consecutive_blank_line_separation' => true,
		'phpdoc_trim' => true,
		'simplified_null_return' => true,
		'single_blank_line_at_eof' => true,
		'single_blank_line_before_namespace' => true,
		'single_quote' => true,
		'standardize_increment' => true,
		'standardize_not_equals' => true,
		'ternary_operator_spaces' => true,
		'trailing_comma_in_multiline' => ['elements' => ['arrays', 'arguments', 'parameters']],
		'types_spaces' => true,
	])
	->setIndent("\t")
	->setLineEnding("\n")
	->setFinder($finder);
