<?php

namespace Database\Seeders;

use App\Infrastructure\Models\Page;
use App\Infrastructure\Models\PageSection;
use App\Infrastructure\Models\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CustomPageSeeder extends Seeder
{
    private $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function run(): void
    {
        $allImages = Media::where('file_path', 'like', '%images%')->get();

        $pages = [
            'Home' => [
                [
                    'heading' => 'Welcome to DCCC&EC',
                    'sub_heading' => 'At Dhaka Credit Child Care and Education Center, we foster a nurturing community where children feel safe, valued, and inspired. We work closely with parents to support each child’s unique growth, encouraging curiosity, creativity, and social connections. From early learning to holistic development, our mission is to help every child thrive—emotionally, socially, and academically.',
                    'content_type' => 'TEXT',
                    'content' => $this->faker->paragraph(6),
                    'button_text' => 'Learn More',
                    'button_link' => '#',
                ],
            ],

            // About Pages
            'About Us' => [
                [
                    'heading' => 'Who We Are',
                    'sub_heading' => 'Our journey and mission',
                    'content_type' => 'TEXT',
                    'content' => $this->faker->paragraph(5),
                ]
            ],
            'Mission & Vision' => [
                [
                    'heading' => 'Our Mission & Vision',
                    'sub_heading' => 'Guiding every child to thrive.',
                    'content_type' => 'TEXT',
                    'content' => 'Our mission is to provide a safe, nurturing, and stimulating environment that promotes holistic development. We envision a community where children grow with curiosity, confidence, and compassion.',
                ]
            ],
            'Our Story' => [
                [
                    'heading' => 'Our Story',
                    'sub_heading' => 'Guiding Little Steps to Big Dreams.',
                    'content_type' => 'HTML',
                    'content' => '<section id="our-story" class="bg-background text-foreground"><div class="container mx-auto px-4 max-w-6xl text-center"><p class="text-lg mb-4">At Dhaka Credit Child Care and Education Center, we are dedicated to fostering a nurturing and inclusive environment where every child feels secure, respected, and inspired to explore their full potential.</p><p class="text-lg mb-4">We recognize that each child is unique, and we collaborate closely with parents to tailor our programs to support curiosity, creativity, and meaningful social connections.</p><p class="text-lg">Our mission is to provide a creative environment conducive to the optimal growth and holistic development of children. We prioritize safety, health, and positivity, ensuring that our space is a place where children can thrive emotionally, socially, and academically.</p></div></section>',

                ]
            ],
            'Our Philosophy' => [
                [
                    'heading' => 'Our Philosophy',
                    'sub_heading' => 'Learning through love and play.',
                    'content_type' => 'TEXT',
                    'content' => 'We believe that children learn best when they feel loved and supported. Our programs emphasize hands-on learning, creativity, social-emotional growth, and respect for each child’s individuality.',
                ]
            ],
            'President\'s Message' => [
                [
                    'heading' => 'President’s Message',
                    'sub_heading' => 'A word from our leadership.',
                    'content_type' => 'TEXT',
                    'content' => 'At DCCC&EC, we are committed to providing exceptional early education. Our dedicated staff and supportive community ensure that every child receives the guidance and care needed to flourish.',
                ]
            ],
            'Principal\'s Message' => [
                [
                    'heading' => 'Principal’s Message',
                    'sub_heading' => 'Meet our principal.',
                    'content_type' => 'TEXT',
                    'content' => 'Our principal leads with passion and experience, focusing on each child’s growth. We encourage curiosity, creativity, and a love for learning from the very first day.',
                ]
            ],

            // Programs
            'Child Care' => [
                [
                    'heading' => 'Program Name', // e.g., 'Infant Care'
                    'sub_heading' => 'Caring for your little ones.',
                    'content_type' => 'TEXT',
                    'content' => 'Our [Program Name] provides a safe, nurturing, and educational environment tailored to children’s developmental needs. Activities include hands-on learning, creative play, and social engagement, guided by trained professionals.',
                    'button_text' => 'Learn More',
                    'button_link' => '#',
                ]
            ],
            'Infant Care' => [
                [
                    'heading' => 'Program Name', // e.g., 'Infant Care'
                    'sub_heading' => 'Caring for your little ones.',
                    'content_type' => 'TEXT',
                    'content' => 'Our [Program Name] provides a safe, nurturing, and educational environment tailored to children’s developmental needs. Activities include hands-on learning, creative play, and social engagement, guided by trained professionals.',
                    'button_text' => 'Learn More',
                    'button_link' => '#',
                ]
            ],
            'Toddler Program' => [
                [
                    'heading' => 'Program Name', // e.g., 'Infant Care'
                    'sub_heading' => 'Caring for your little ones.',
                    'content_type' => 'TEXT',
                    'content' => 'Our [Program Name] provides a safe, nurturing, and educational environment tailored to children’s developmental needs. Activities include hands-on learning, creative play, and social engagement, guided by trained professionals.',
                    'button_text' => 'Learn More',
                    'button_link' => '#',
                ]
            ],
            'Preschool Program' => [
                [
                    'heading' => 'Program Name', // e.g., 'Infant Care'
                    'sub_heading' => 'Caring for your little ones.',
                    'content_type' => 'TEXT',
                    'content' => 'Our [Program Name] provides a safe, nurturing, and educational environment tailored to children’s developmental needs. Activities include hands-on learning, creative play, and social engagement, guided by trained professionals.',
                    'button_text' => 'Learn More',
                    'button_link' => '#',
                ]
            ],
            'After-School Program' => [
                [
                    'heading' => 'Program Name', // e.g., 'Infant Care'
                    'sub_heading' => 'Caring for your little ones.',
                    'content_type' => 'TEXT',
                    'content' => 'Our [Program Name] provides a safe, nurturing, and educational environment tailored to children’s developmental needs. Activities include hands-on learning, creative play, and social engagement, guided by trained professionals.',
                    'button_text' => 'Learn More',
                    'button_link' => '#',
                ]
            ],
            'Summer Camps' => [
                [
                    'heading' => 'Program Name', // e.g., 'Infant Care'
                    'sub_heading' => 'Caring for your little ones.',
                    'content_type' => 'TEXT',
                    'content' => 'Our [Program Name] provides a safe, nurturing, and educational environment tailored to children’s developmental needs. Activities include hands-on learning, creative play, and social engagement, guided by trained professionals.',
                    'button_text' => 'Learn More',
                    'button_link' => '#',
                ]
            ],
            'Class Rutines' => [
                [
                    'heading' => 'Daily Class Routines',
                    'sub_heading' => 'A structured, joyful day.',
                    'content_type' => 'TEXT',
                    'content' => 'Our daily routines balance learning and play. Children enjoy structured lessons, creative activities, outdoor play, and rest periods to ensure they thrive academically and emotionally.',
                ]
            ],

            // Parent Resources
            'Enrollment' => [
                [
                    'heading' => 'Enrollment',
                    'sub_heading' => 'Join our community.',
                    'content_type' => 'TEXT',
                    'content' => 'Enrollment is open year-round. We provide guidance on registration, necessary forms, and program selection to ensure a smooth start for your child.',
                ]
            ],
            'Curriculum' => [
                [
                    'heading' => 'Our Curriculum',
                    'sub_heading' => 'Learning designed for growth.',
                    'content_type' => 'TEXT',
                    'content' => 'Our curriculum integrates academics, creativity, and social-emotional development. We follow evidence-based methods to inspire curiosity and confidence in every child.',
                ]
            ],
            'Rules & Regulations' => [],
            'Health & Safety' => [
                [
                    'heading' => 'Health & Safety',
                    'sub_heading' => 'A safe environment for every child.',
                    'content_type' => 'TEXT',
                    'content' => 'We prioritize health and safety with trained staff, hygienic facilities, and emergency preparedness. Parents can rest assured that their children are in caring, safe hands.',
                ]
            ],
            'Calendar' => [],
            'Nutrition & Meals' => [],
            'FAQ' => [
                [
                    'heading' => 'Frequently Asked Questions',
                    'sub_heading' => 'Find your answers here',
                    'content_type' => 'TEXT',
                    'content' => '',
                    'json_array' => [
                        ['question' => 'What are your school hours?', 'answer' => 'We operate from 8:00 AM to 3:00 PM.'],
                        ['question' => 'Do you offer transportation?', 'answer' => 'Yes, bus services are available.'],
                        ['question' => 'What are the school fees?', 'answer' => 'The school fees depend on the program you choose.'],
                        ['question' => 'What are the school policies?', 'answer' => 'Please refer to our website for the latest school policies.'],
                        ['question' => 'Do you offer scholarships?', 'answer' => 'Yes, we offer scholarships to eligible students.'],
                        ['question' => 'What are the school policies?', 'answer' => 'Please refer to our website for the latest school policies.'],
                    ]
                ]
            ],

            // Legal
            'Disclaimer' => [
                [
                    'heading' => 'Page Title', // e.g., 'Privacy Policy'
                    'sub_heading' => 'Important legal information.',
                    'content_type' => 'TEXT',
                    'content' => 'Please read this page carefully to understand our policies and your rights. Our goal is transparency and accountability in all aspects of our child care and education services.',
                ]
            ],
            'Terms of Service' => [
                [
                    'heading' => 'Page Title', // e.g., 'Privacy Policy'
                    'sub_heading' => 'Important legal information.',
                    'content_type' => 'TEXT',
                    'content' => 'Please read this page carefully to understand our policies and your rights. Our goal is transparency and accountability in all aspects of our child care and education services.',
                ]
            ],
            'Privacy Policy' => [
                [
                    'heading' => 'Page Title', // e.g., 'Privacy Policy'
                    'sub_heading' => 'Important legal information.',
                    'content_type' => 'TEXT',
                    'content' => 'Please read this page carefully to understand our policies and your rights. Our goal is transparency and accountability in all aspects of our child care and education services.',
                ]
            ],
        ];

        foreach ($pages as $title => $sections) {
            $slug = Str::slug($title);

            $page = Page::firstOrCreate(
                ['slug' => $slug],
                [
                    'title' => $title,
                    'meta_title' => $title,
                    'meta_description' => "{$title} page description",
                    'meta_keywords' => Str::lower(str_replace(' ', ',', $title)),
                    'media_id' => $allImages->random()->id ?? null,
                ]
            );

            foreach ($sections as $index => $section) {
                PageSection::updateOrCreate(
                    [
                        'page_id' => $page->id,
                        'sort_order' => $index + 1,
                    ],
                    [
                        'heading' => $section['heading'] ?? null,
                        'sub_heading' => $section['sub_heading'] ?? null,
                        'content_type' => $section['content_type'] ?? 'TEXT',
                        'content' => $section['content'] ?? $this->faker->paragraph(3),
                        'json_array' => json_encode($section['json_array'] ?? []),
                        'gallery' => json_encode($section['gallery'] ?? []),
                        'button_text' => $section['button_text'] ?? null,
                        'button_link' => $section['button_link'] ?? null,
                    ]
                );
            }
        }
    }
}
