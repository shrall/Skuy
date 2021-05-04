<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'logo', 'banner', 'template', 'date',
        'email', 'instagram', 'whatsapp',
        'title_color', 'desc_color', 'date_color', 'button_color',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
