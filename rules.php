<?php

/**
 * @see https://gist.github.com/laravel-shift/cab527923ed2a109dda047b97d53c200
 *
 * some additions were made (and annotated)
 */

return [
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => [
        'default' => 'single_space',
        'operators' => ['=>' => null],
    ],
    'blank_line_after_namespace' => true,
    'blank_line_after_opening_tag' => true,
    'blank_line_before_statement' => [
        'statements' => ['return'],
    ],
    'braces' => true,
    'cast_spaces' => true,
    'class_attributes_separation' => [ // add const, property and trait_import
        'elements' => [
            'const' => 'one',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'one',
        ],
    ],
    'class_definition' => true,
    'concat_space' => [
        'spacing' => 'one', // none to one
    ],
    'declare_equal_normalize' => true,
    'elseif' => true,
    'encoding' => true,
    'full_opening_tag' => true,
    'fully_qualified_strict_types' => true, // added by Shift
    'function_declaration' => true,
    'function_typehint_space' => true,
    'heredoc_to_nowdoc' => true,
    'include' => true,
    'increment_style' => ['style' => 'post'],
    'indentation_type' => true,
    'linebreak_after_opening_tag' => true,
    'line_ending' => true,
    'lowercase_cast' => true,
    'constant_case' => [ // adjustment for 'lowercase_constants' rule for php cs fixer v3
        'case' => 'lower',
    ],
    'lowercase_keywords' => true,
    'lowercase_static_reference' => true, // added from Symfony
    'magic_method_casing' => true, // added from Symfony
    'magic_constant_casing' => true,
    'method_argument_space' => true,
    'native_function_casing' => true,
    'no_alias_functions' => true,
    'no_extra_blank_lines' => [
        'tokens' => [
            'extra',
            'throw',
            'use',
            'use_trait',
        ],
    ],
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_closing_tag' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],
    'no_multiline_whitespace_around_double_arrow' => true,
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_after_function_name' => true,
    'no_spaces_around_offset' => true,
    'no_spaces_inside_parenthesis' => true,
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_trailing_whitespace' => true,
    'no_trailing_whitespace_in_comment' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unreachable_default_argument_value' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'normalize_index_brace' => true,
    'not_operator_with_successor_space' => true,
    'object_operator_without_whitespace' => true,
    'ordered_imports' => ['sort_algorithm' => 'alpha'], // sortAlgorithm to sort_algorithm
    'phpdoc_indent' => true,
    'phpdoc_tag_type' => true, // adjustment for 'phpdoc_inline_tag' rule for php cs fixer v3
    'phpdoc_inline_tag_normalizer' => true, // adjustment for 'phpdoc_inline_tag' rule for php cs fixer v3
    'general_phpdoc_tag_rename' => true, // adjustment for 'phpdoc_inline_tag' rule for php cs fixer v3
    'phpdoc_no_access' => true,
    'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_scalar' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_summary' => false, // barryvdh/laravel-ide-helper model helper writes class name in first line
    'phpdoc_to_comment' => true,
    'phpdoc_trim' => true,
    'phpdoc_types' => true,
    'phpdoc_var_without_name' => true,
    'psr_autoloading' => true, // adjusted from 'psr4' rule for php cs fixer v3
    'self_accessor' => true,
    'short_scalar_cast' => true,
    'simplified_null_return' => true,
    'single_blank_line_at_eof' => true,
    'single_blank_line_before_namespace' => true,
    'single_class_element_per_statement' => true,
    'single_import_per_statement' => true,
    'single_line_after_imports' => true,
    'single_line_comment_style' => [
        'comment_types' => ['hash'],
    ],
    'single_quote' => true,
    'space_after_semicolon' => true,
    'standardize_not_equals' => true,
    'switch_case_semicolon_to_colon' => true,
    'switch_case_space' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline' => [ // adjusted for php cs fixer v3
        'after_heredoc' => true,
        'elements' => [
            'arrays',
            'arguments',
            // 'parameters',
        ],
    ],
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'visibility_required' => [
        'elements' => ['const', 'method', 'property'], // add const
    ],
    'whitespace_after_comma_in_array' => true,
    // the following additions are made to gain more performance
    'native_function_invocation' => [
        'exclude' => [],
        'include' => ['@internal', '@all'],
        'scope' => 'all',
        'strict' => false,
    ],
    'native_constant_invocation' => [
        'exclude' => ['null', 'false', 'true'],
        'include' => [],
        'fix_built_in' => true,
        'scope' => 'all',
    ],
    // clean up the steps above (import FQDN)
    'global_namespace_import' => [
        'import_classes' => true,
        'import_constants' => true,
        'import_functions' => true,
    ],
    'mb_str_functions' => true, // utf-8 safe
    'is_null' => true, // added to get strict compare instead of is_null
    'yoda_style' => [ // personal taste
        'always_move_variable' => true,
    ],
    'no_unused_imports' => true, // personal taste
    'array_indentation' => true, // personal taste
];
