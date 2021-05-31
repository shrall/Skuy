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
        'extra', 'extra_heading', 'extra_template', 'extra_text', 'extra_button_color', 'extra_text_color',
        'extra_1', 'extra_image_1', 'extra_head_1', 'extra_body_1',
        'extra_2', 'extra_image_2', 'extra_head_2', 'extra_body_2',
        'extra_3', 'extra_image_3', 'extra_head_3', 'extra_body_3',
        'extra_4', 'extra_image_4', 'extra_head_4', 'extra_body_4',
        'extra_5', 'extra_image_5', 'extra_head_5', 'extra_body_5',
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
        return 'custom_link';
    }
}
