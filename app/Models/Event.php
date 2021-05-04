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
        'name', 'custom_link',
        'description',
        'logo', 'banner', 'template', 'date',
        'email', 'instagram', 'whatsapp',
        'title_color', 'desc_color', 'date_color', 'button_color',
    ];

    public function user() {
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
        return 'custom_link';
    }
}
