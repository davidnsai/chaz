<?php

if (!function_exists('render_page')) {
    function render_page(string $view, array $data = []): string
    {
        return view('templates/header', $data)
             . view($view, $data)
             . view('templates/footer', $data);
    }
}
