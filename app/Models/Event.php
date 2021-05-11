<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title', 'custom_link',
        'description',
        'logo', 'banner', 'template', 'date',
        'email', 'instagram', 'whatsapp',
        'title_color', 'desc_color', 'date_color', 'contacts_color',
        'register', 'register_text', 'register_link', 'register_button_color', 'register_text_color',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'custom_link'
            ]
        ];
    }
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
