<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request['custom_link'] == null) {
            $request['custom_link'] = str_replace(" ", "-", $request['title']);
        } else {
            $request['custom_link'] = str_replace(" ", "-", $request['custom_link']);
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'custom_link' => 'unique:events,custom_link',
            'logo' => 'image',
            'banner' => 'image',
        ]);

        if ($request->has('logo')) {
            $logo = time() . '-' . $request['logo']->getClientOriginalName();
            $request->logo->move(public_path('events/logo'), $logo);
        } else {
            $logo = null;
        }
        if ($request->has('banner')) {
            $banner = time() . '-' . $request['banner']->getClientOriginalName();
            $request->banner->move(public_path('events/banner'), $banner);
        } else {
            $banner = null;
        }
        if ($request['email'] != null) {
            $request['email'] = "mailto:" . $request['email'];
        }
        if ($request['instagram'] != null) {
            $request['instagram'] = "https://instagram.com/" . $request['instagram'];
        }
        if ($request['whatsapp'] != null) {
            $request['whatsapp'] = "https://api.whatsapp.com/send?phone=" . $request['whatsapp'];
        }
        if ($request['register'] == 'true') {
            $register = '1';
        } else {
            $register = '0';
        }

        Event::create([
            'title' => $request['title'],
            'custom_link' => $request['custom_link'],
            'slug' => $request['custom_link'],
            'description' => $request['description'],
            'logo' => $logo,
            'banner' => $banner,
            'template' => $request['template'],
            'email' => $request['email'],
            'instagram' => $request['instagram'],
            'whatsapp' => $request['whatsapp'],
            'date' => $request['date'],
            'title_color' => $request['title_color'],
            'desc_color' => $request['desc_color'],
            'date_color' => $request['date_color'],
            'contacts_color' => $request['contacts_color'],
            'register' => $register,
            'register_text' => $request['register_text'],
            'register_button_color' => $request['register_button_color'],
            'register_text_color' => $request['register_text_color'],
            'user_id' => Auth::id(),
        ]);

        return view('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function register_edit(Event $event)
    {
        //
    }

    public function register_update(Request $request, Event $event)
    {
        //
    }
}
