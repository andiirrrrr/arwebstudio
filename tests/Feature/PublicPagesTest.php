<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    public function test_home_page_returns_success(): void
    {
        $this->get(route('home'))->assertOk();
    }

    public function test_services_page_returns_success(): void
    {
        $this->get(route('services'))->assertOk();
    }

    public function test_portfolio_page_returns_success(): void
    {
        $this->get(route('portfolio'))->assertOk();
    }

    public function test_about_page_returns_success(): void
    {
        $this->get(route('about'))->assertOk();
    }

    public function test_faq_page_returns_success(): void
    {
        $this->get(route('faq'))->assertOk();
    }

    public function test_contact_page_returns_success(): void
    {
        $this->get(route('contact'))->assertOk();
    }

    public function test_blog_page_returns_success(): void
    {
        $this->get(route('blog'))->assertOk();
    }

    public function test_admin_login_page_returns_success(): void
    {
        $this->get('/admin/login')->assertOk();
    }
}
