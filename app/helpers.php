<?php

use App\Models\SiteSetting;

if (! function_exists('site_setting')) {
    function site_setting(string $key, $default = null)
    {
        return SiteSetting::get($key, $default);
    }
}

if (! function_exists('whatsapp_link')) {
    function whatsapp_link(string $message = null): string
    {
        $number = preg_replace('/[^0-9]/', '', (string) site_setting('whatsapp', '6285922107678'));

        return 'https://wa.me/' . $number . ($message ? '?text=' . urlencode($message) : '');
    }
}

if (! function_exists('sanitize_html')) {
    function sanitize_html(?string $html): string
    {
        if (empty($html)) {
            return '';
        }

        $blockedTags = ['script', 'iframe', 'object', 'embed', 'form', 'input', 'button', 'style', 'link', 'meta', 'svg', 'math'];

        foreach ($blockedTags as $tag) {
            $html = preg_replace('/<\/?' . $tag . '[^>]*>/i', '', $html);
        }

        $html = preg_replace('/\son\w+\s*=\s*("[^"]*"|\'[^\']*\'|[^\s>]+)/i', '', $html);

        $html = preg_replace('/(href|src|action)\s*=\s*(["\']?)\s*(javascript:|data:text\/html)/i', '$1=$2', $html);

        return $html;
    }
}
