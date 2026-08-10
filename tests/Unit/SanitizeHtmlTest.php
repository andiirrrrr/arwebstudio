<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SanitizeHtmlTest extends TestCase
{
    public function test_removes_script_tags(): void
    {
        $html = '<p>Hello</p><script>alert(1)</script>';
        $result = sanitize_html($html);

        $this->assertStringNotContainsString('script', $result);
        $this->assertStringContainsString('<p>Hello</p>', $result);
    }

    public function test_removes_iframe_and_style(): void
    {
        $html = '<iframe src="evil"></iframe><style>body{display:none}</style><p>Konten</p>';
        $result = sanitize_html($html);

        $this->assertStringNotContainsString('iframe', $result);
        $this->assertStringNotContainsString('style', $result);
        $this->assertStringContainsString('<p>Konten</p>', $result);
    }

    public function test_removes_event_handler_attributes(): void
    {
        $html = '<p onclick="alert(1)">Teks</p>';
        $result = sanitize_html($html);

        $this->assertStringNotContainsString('onclick', $result);
        $this->assertStringContainsString('<p>', $result);
        $this->assertStringContainsString('Teks</p>', $result);
    }

    public function test_removes_javascript_urls(): void
    {
        $html = '<a href="javascript:alert(1)">Link</a>';
        $result = sanitize_html($html);

        $this->assertStringNotContainsString('javascript:', $result);
    }

    public function test_keeps_normal_rich_editor_html(): void
    {
        $html = '<h2>Judul</h2><p><strong>Bold</strong> dan <em>italic</em></p><ul><li>Item</li></ul><blockquote>Kutipan</blockquote>';
        $result = sanitize_html($html);

        $this->assertStringContainsString('<h2>Judul</h2>', $result);
        $this->assertStringContainsString('<strong>Bold</strong>', $result);
        $this->assertStringContainsString('<em>italic</em>', $result);
        $this->assertStringContainsString('<ul><li>Item</li></ul>', $result);
        $this->assertStringContainsString('<blockquote>Kutipan</blockquote>', $result);
    }

    public function test_handles_empty_input(): void
    {
        $this->assertSame('', sanitize_html(''));
        $this->assertSame('', sanitize_html(null));
    }
}
