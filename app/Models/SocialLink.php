<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $fillable = [
        'platform',
        'url',
        'username',
        'is_active',
        'sort_order',
    ];

    // Helper pour récupérer l'icône ou la couleur en fonction de la plateforme
    public function getPlatformColorAttribute(): string
    {
        return match(strtolower($this->platform)) {
            'facebook' => '#1877F2',
            'linkedin' => '#0A66C2',
            'twitter', 'x' => '#000000',
            'instagram' => '#E4405F',
            'whatsapp' => '#25D366',
            'telegram' => '#0088cc',
            'youtube' => '#FF0000',
            default => '#6B7280',
        };
    }

    public function getPlatformIconAttribute(): string
    {
        // On pourra utiliser des composants Blade dynamiques plus tard
        return strtolower($this->platform);
    }
}
