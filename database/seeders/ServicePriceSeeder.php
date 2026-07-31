<?php

namespace Database\Seeders;

use App\Models\ServicePrice;
use Illuminate\Database\Seeder;

class ServicePriceSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // =====================================================
            // LANDING PAGE (service_id = 1)
            // =====================================================
            [
                'service_id' => 1,
                'package_id' => 1, // Basic
                'price' => 1500000,
                'estimated_days' => 3,
                'page_limit' => 1,
                'revision_limit' => 2,
                'hosting' => false,
                'domain' => false,
                'is_featured' => false,
                'features' =>[
                    'Responsive Design',
                    'Modern UI',
                    'Contact Form',
                    'WhatsApp Integration',
                    'Google Maps',
                    'SEO Basic',
                ],
            ],
            [
                'service_id' => 1,
                'package_id' => 2, // Pro
                'price' => 2500000,
                'estimated_days' => 5,
                'page_limit' => 3,
                'revision_limit' => 4,
                'hosting' => true,
                'domain' => true,
                'is_featured' => true,
                'features' =>[
                    'Semua Fitur Basic',
                    'Animasi Interaktif',
                    'Form Custom',
                    'Social Media Integration',
                    'Optimasi Kecepatan',
                    'SEO On Page',
                ],
            ],
            [
                'service_id' => 1,
                'package_id' => 3, // Business
                'price' => 4000000,
                'estimated_days' => 7,
                'page_limit' => null,
                'revision_limit' => null,
                'hosting' => true,
                'domain' => true,
                'is_featured' => false,
                'features' =>[
                    'Semua Fitur Pro',
                    'CMS Admin',
                    'Blog',
                    'Google Analytics',
                    'Core Web Vitals Optimization',
                    'Priority Support',
                ],
            ],

            // =====================================================
            // COMPANY PROFILE (service_id = 2)
            // =====================================================
            [
                'service_id' => 2,
                'package_id' => 1, // Basic
                'price' => 2500000,
                'estimated_days' => 7,
                'page_limit' => 5,
                'revision_limit' => 2,
                'hosting' => false,
                'domain' => false,
                'is_featured' => false,
                'features' =>[
                    'Responsive Design',
                    'Company Profile',
                    'Contact Form',
                    'Google Maps',
                    'WhatsApp',
                    'SEO Basic',
                ],
            ],
            [
                'service_id' => 2,
                'package_id' => 2, // Pro
                'price' => 4500000,
                'estimated_days' => 10,
                'page_limit' => 10,
                'revision_limit' => 4,
                'hosting' => true,
                'domain' => true,
                'is_featured' => true,
                'features' =>[
                    'Semua Fitur Basic',
                    'CMS Admin',
                    'Blog',
                    'Portfolio',
                    'SEO Optimization',
                    'Social Media Integration',
                ],
            ],
            [
                'service_id' => 2,
                'package_id' => 3, // Business
                'price' => 6500000,
                'estimated_days' => 14,
                'page_limit' => null,
                'revision_limit' => null,
                'hosting' => true,
                'domain' => true,
                'is_featured' => false,
                'features' =>[
                    'Semua Fitur Pro',
                    'Unlimited Pages',
                    'Multi User',
                    'Multi Language',
                    'Google Analytics',
                    'Priority Support',
                ],
            ],

            // =====================================================
            // PORTFOLIO WEBSITE (service_id = 3)
            // =====================================================
            [
                'service_id' => 3,
                'package_id' => 1, // Basic
                'price' => 1800000,
                'estimated_days' => 5,
                'page_limit' => 5,
                'revision_limit' => 2,
                'hosting' => false,
                'domain' => false,
                'is_featured' => false,
                'features' =>[
                    'Responsive Design',
                    'Profile Section',
                    'Portfolio Gallery',
                    'WhatsApp',
                    'SEO Basic',
                ],
            ],
            [
                'service_id' => 3,
                'package_id' => 2, // Pro
                'price' => 3000000,
                'estimated_days' => 7,
                'page_limit' => 10,
                'revision_limit' => 4,
                'hosting' => true,
                'domain' => true,
                'is_featured' => true,
                'features' =>[
                    'Semua Fitur Basic',
                    'Project Unlimited',
                    'Timeline',
                    'Skill Showcase',
                    'Blog',
                    'Interactive Animation',
                ],
            ],
            [
                'service_id' => 3,
                'package_id' => 3, // Business
                'price' => 5000000,
                'estimated_days' => 10,
                'page_limit' => null,
                'revision_limit' => null,
                'hosting' => true,
                'domain' => true,
                'is_featured' => false,
                'features' =>[
                    'Semua Fitur Pro',
                    'CMS Admin',
                    'Case Study',
                    'Multi Language',
                    'Google Analytics',
                    'Priority Support',
                ],
            ],

            // =====================================================
            // E-COMMERCE (service_id = 4)
            // =====================================================
            [
                'service_id' => 4,
                'package_id' => 1, // Basic
                'price' => 7500000,
                'estimated_days' => 14,
                'page_limit' => 10,
                'revision_limit' => 2,
                'hosting' => false,
                'domain' => false,
                'is_featured' => false,
                'features' =>[
                    'Dashboard Admin',
                    '30 Produk',
                    'Cart',
                    'Checkout',
                    'WhatsApp Checkout',
                    'Responsive Design',
                ],
            ],
            [
                'service_id' => 4,
                'package_id' => 2, // Pro
                'price' => 10000000,
                'estimated_days' => 21,
                'page_limit' => null,
                'revision_limit' => 4,
                'hosting' => true,
                'domain' => true,
                'is_featured' => true,
                'features' =>[
                    'Semua Fitur Basic',
                    'Unlimited Products',
                    'Order Management',
                    'Stock Management',
                    'Discount System',
                    'Sales Report',
                ],
            ],
            [
                'service_id' => 4,
                'package_id' => 3, // Business
                'price' => 15000000,
                'estimated_days' => 30,
                'page_limit' => null,
                'revision_limit' => null,
                'hosting' => true,
                'domain' => true,
                'is_featured' => false,
                'features' =>[
                    'Semua Fitur Pro',
                    'Payment Gateway',
                    'Shipping Integration',
                    'Role & Permission',
                    'Analytics Dashboard',
                    'Database Backup',
                ],
            ],

            // =====================================================
            // CUSTOM WEB APP (service_id = 5)
            // =====================================================
            [
                'service_id' => 5,
                'package_id' => 1, // Basic
                'price' => 10000000,
                'estimated_days' => 21,
                'page_limit' => null,
                'revision_limit' => 2,
                'hosting' => false,
                'domain' => false,
                'is_featured' => false,
                'features' =>[
                    'Requirement Analysis',
                    'Dashboard Admin',
                    'CRUD System',
                    'Responsive Design',
                    'Documentation',
                ],
            ],
            [
                'service_id' => 5,
                'package_id' => 2, // Pro
                'price' => 15000000,
                'estimated_days' => 30,
                'page_limit' => null,
                'revision_limit' => 4,
                'hosting' => true,
                'domain' => true,
                'is_featured' => true,
                'features' =>[
                    'Semua Fitur Basic',
                    'Multi Module',
                    'Role & Permission',
                    'Export PDF & Excel',
                    'Dashboard Statistics',
                    'API Integration',
                ],
            ],
            [
                'service_id' => 5,
                'package_id' => 3, // Business
                'price' => 25000000,
                'estimated_days' => 45,
                'page_limit' => null,
                'revision_limit' => null,
                'hosting' => true,
                'domain' => true,
                'is_featured' => false,
                'features' =>[
                    'Semua Fitur Pro',
                    'Workflow Automation',
                    'Third Party Integration',
                    'High Security',
                    'Scalable Architecture',
                    'Priority Support',
                ],
            ],
            [
                'service_id' => 6,
                'package_id' => 1, // Business
                'price' => 500000,
                'estimated_days' => 3,
                'page_limit' => 5,
                'revision_limit' => 2,
                'hosting' => false,
                'domain' => false,
                'is_featured' => false,
                'features' =>[
                    'Wireframe Dasar',
                    'Responsive Mobile & Desktop',
                    'Interactive Prototype',
                    'Design System Sederhana',
                ],
            ],
            [
                'service_id' => 6,
                'package_id' => 2, // Business
                'price' => 800000,
                'estimated_days' => 3,
                'page_limit' => 10,
                'revision_limit' => 4,
                'hosting' => false,
                'domain' => false,
                'is_featured' => true,
                'features' =>[
                    'Semua Fitur Basic',
                    'Design System Lengkap',
                    'UI Components Reusable',
                    'Prototype Interaktif Lengkap',
                    'Developer Handoff',
                ],
            ],
            [
                'service_id' => 6,
                'package_id' => 3, // Business
                'price' => 1500000,
                'estimated_days' => 3,
                'page_limit' => null,
                'revision_limit' => null,
                'hosting' => false,
                'domain' => false,
                'is_featured' => false,
                'features' =>[
                    'Semua Fitur Pro',
                    'Advanced Design System',
                    'Design Token & Component Library',
                    'User Flow Lengkap',
                    'Dokumentasi Desain',
                    'Prioritas Support',
                ],
            ],
        ];

        // Insert data
        foreach ($data as $item) {
            ServicePrice::create($item);
        }

        $this->command->info('✅ ServicePrice seeder completed! ' . count($data) . ' records inserted.');
    }
}