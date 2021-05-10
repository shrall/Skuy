<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event();
        $event->title = 'NPLC';
        $event->custom_link = 'nplc2020-1';
        $event->slug = $event->custom_link;
        $event->description = 'National Programming & Logic Competition';
        $event->logo = "https://raw.githubusercontent.com/shrall/enpielsiweb/main/emaillogo.png";
        $event->banner = "https://raw.githubusercontent.com/shrall/enpielsiweb/main/posternplc.png";
        $event->template = 1;
        $event->email = "mailto:shrallvierdo@gmail.com";
        $event->instagram = "https://instagram.com/shrallok";
        $event->whatsapp = "https://api.whatsapp.com/send?phone=6281233129966";
        $event->date = "2021-05-15";
        $event->title_color = "#000000FF";
        $event->desc_color = "#000000FF";
        $event->date_color = "#000000FF";
        $event->contacts_color = "#000000FF";
        $event->register = "1";
        $event->register_text = "Register";
        $event->register_button_color = "#000000FF";
        $event->register_text_color = "#FFFFFFFF";
        $event->user_id = 1;
        $event->save();

        $event = new Event();
        $event->title = 'NPLC';
        $event->custom_link = 'nplc2020-2';
        $event->slug = $event->custom_link;
        $event->description = 'National Programming & Logic Competition';
        $event->logo = "https://raw.githubusercontent.com/shrall/enpielsiweb/main/emaillogo.png";
        $event->banner = "https://raw.githubusercontent.com/shrall/enpielsiweb/main/posternplc.png";
        $event->template = 2;
        $event->email = "mailto:shrallvierdo@gmail.com";
        $event->instagram = "https://instagram.com/shrallok";
        $event->whatsapp = "https://api.whatsapp.com/send?phone=6281233129966";
        $event->date = "2021-05-15";
        $event->title_color = "#000000FF";
        $event->desc_color = "#000000FF";
        $event->date_color = "#000000FF";
        $event->contacts_color = "#000000FF";
        $event->register = "1";
        $event->register_text = "Register";
        $event->register_button_color = "#000000FF";
        $event->register_text_color = "#FFFFFFFF";
        $event->user_id = 1;
        $event->save();
    }
}
