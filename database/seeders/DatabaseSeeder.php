<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ImpactStat;
use App\Models\Program;
use App\Models\TeamMember;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin User
        User::firstOrCreate([
            'email' => 'admin@newday.org',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        // Impact Stats
        ImpactStat::create(['title' => 'Personnes formées', 'value' => '125+', 'sort_order' => 1]);
        ImpactStat::create(['title' => 'Programmes', 'value' => '7', 'description' => 'Métiers différents', 'sort_order' => 2]);
        ImpactStat::create(['title' => 'Taux d’insertion', 'value' => '90%', 'description' => 'À l’issue des formations', 'sort_order' => 3]);
        ImpactStat::create(['title' => 'Partenaires', 'value' => '15+', 'description' => 'Institutions et ONG', 'sort_order' => 4]);

        // Programs
        $programs = [
            ['title' => 'Couture', 'description' => 'Apprenez à confectionner des vêtements et des accessoires grâce à des cours de couture adaptés.'],
            ['title' => 'Tissage', 'description' => 'Maîtrisez les techniques de tissage pour créer des pièces uniques et développer votre créativité.'],
            ['title' => 'Maroquinerie', 'description' => 'Apprenez à travailler le cuir et à réaliser des articles de maroquinerie de haute qualité.'],
            ['title' => 'Perlage', 'description' => 'Réalisez des bijoux et des objets décoratifs en maîtrisant les techniques de perlage.'],
            ['title' => 'Salon de coiffure / Onglerie', 'description' => 'Formez‑vous aux métiers de la beauté : coiffure, soins des ongles et maquillage professionnels.'],
            ['title' => 'Pisciculture / Élevage', 'description' => 'Initiez‑vous à l’élevage et à la pisciculture pour développer des activités génératrices de revenus.'],
        ];

        foreach ($programs as $prog) {
            Program::create([
                'title' => $prog['title'],
                'slug' => Str::slug($prog['title']),
                'description' => $prog['description'],
                'content' => '<p>' . $prog['description'] . ' Nous offrons une formation complète alliant théorie et pratique.</p>',
            ]);
        }

        // Team Members
        TeamMember::create(['name' => 'Jean Dupont', 'role' => 'Directeur Exécutif', 'bio' => 'Jean dirige l’ONG avec passion depuis 10 ans.', 'sort_order' => 1]);
        TeamMember::create(['name' => 'Marie Curie', 'role' => 'Responsable Pédagogique', 'bio' => 'Experte en langue des signes et en éducation spécialisée.', 'sort_order' => 2]);
        TeamMember::create(['name' => 'Pierre Martin', 'role' => 'Formateur Couture', 'bio' => 'Styliste de formation, il transmet son savoir aux jeunes.', 'sort_order' => 3]);

        // Partners
        Partner::create(['name' => 'Ministère des Affaires Sociales']);
        Partner::create(['name' => 'Mairie de Yaoundé 6']);
        Partner::create(['name' => 'ONG Locale 1']);

        // Testimonials
        Testimonial::create(['name' => 'Amina', 'role' => 'Ancienne bénéficiaire', 'content' => 'Grâce à New Day, j’ai appris la couture et je peux maintenant subvenir à mes besoins et aider ma famille.']);
        Testimonial::create(['name' => 'Paul', 'role' => 'Bénéficiaire', 'content' => 'La formation en tissage m’a donné confiance en moi et m’a permis d’ouvrir un atelier.']);
        Testimonial::create(['name' => 'Linda', 'role' => 'Bénéficiaire', 'content' => 'Je ne savais pas que je pouvais réussir. Aujourd’hui, je fais de la maroquinerie et je vends mes créations.']);

        // Posts
        Post::create([
            'title' => 'Lancement de la nouvelle rentrée académique',
            'slug' => 'rentree-academique-2025',
            'excerpt' => 'Nous accueillons une nouvelle vague de 30 étudiants pour cette session de formation.',
            'content' => '<p>C’est avec une grande joie que nous lançons la rentrée académique 2025...</p>',
            'published_at' => now(),
            'is_featured' => true,
        ]);
        Post::create([
            'title' => 'Visite du Ministre des Affaires Sociales',
            'slug' => 'visite-ministre',
            'excerpt' => 'Une visite marquante qui témoigne de la reconnaissance de notre travail.',
            'content' => '<p>Le Ministre nous a fait l’honneur de visiter nos ateliers...</p>',
            'published_at' => now()->subDays(10),
        ]);
        Post::create([
            'title' => 'Atelier de sensibilisation avec les parents',
            'slug' => 'atelier-parents',
            'excerpt' => 'Rencontre avec les familles pour discuter de l’importance du soutien familial.',
            'content' => '<p>Les parents jouent un rôle crucial dans la réussite de nos bénéficiaires...</p>',
            'published_at' => now()->subDays(20),
        ]);
    }
}