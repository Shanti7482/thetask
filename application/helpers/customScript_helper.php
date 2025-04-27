<?php
if (!function_exists('start_push')) {
    function start_push($section) {
        $CI =& get_instance();
        if (!isset($CI->push_stacks)) {
            $CI->push_stacks = [];
        }
        if (!isset($CI->push_stacks[$section])) {
            $CI->push_stacks[$section] = [];
        }
        ob_start();
        $CI->current_push_section = $section;
    }
}

if (!function_exists('end_push')) {
    function end_push($section = null) {
        $CI =& get_instance();
        if (!isset($CI->push_stacks)) return;
        $section = $section ?: ($CI->current_push_section ?? 'default');
        $CI->push_stacks[$section][] = ob_get_clean();
    }
}

if (!function_exists('yield_push')) {
    function yield_push($section) {
        $CI =& get_instance();
        if (empty($CI->push_stacks[$section])) return;
        foreach ($CI->push_stacks[$section] as $content) {
            echo $content;
        }
    }
}
