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
        // dd($request);
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
        if ($request->has('component1')) {
            $component_image_1 = $request['custom_link'] . time() . '-' . $request['component1']->getClientOriginalName();
            $request->component1->move(public_path('events/component'), $component_image_1);
        } else {
            $component_image_1 = null;
        }
        if ($request->has('component2')) {
            $component_image_2 = $request['custom_link'] . time() . '-' . $request['component2']->getClientOriginalName();
            $request->component2->move(public_path('events/component'), $component_image_2);
        } else {
            $component_image_2 = null;
        }
        if ($request->has('component3')) {
            $component_image_3 = $request['custom_link'] . time() . '-' . $request['component3']->getClientOriginalName();
            $request->component3->move(public_path('events/component'), $component_image_3);
        } else {
            $component_image_3 = null;
        }
        if ($request->has('component4')) {
            $component_image_4 = $request['custom_link'] . time() . '-' . $request['component4']->getClientOriginalName();
            $request->component4->move(public_path('events/component'), $component_image_4);
        } else {
            $component_image_4 = null;
        }
        if ($request->has('component5')) {
            $component_image_5 = $request['custom_link'] . time() . '-' . $request['component5']->getClientOriginalName();
            $request->component5->move(public_path('events/component'), $component_image_5);
        } else {
            $component_image_5 = null;
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
        if ($request['extra'] == 'true') {
            $extra = '1';
        } else {
            $extra = '0';
        }
        if ($request['extra_component_count'] == '5') {
            $component_1 = '1';
            $component_2 = '1';
            $component_3 = '1';
            $component_4 = '1';
            $component_5 = '1';
        } else if ($request['extra_component_count'] == '4') {
            $component_1 = '1';
            $component_2 = '1';
            $component_3 = '1';
            $component_4 = '1';
            $component_5 = '0';
        } else if ($request['extra_component_count'] == '3') {
            $component_1 = '1';
            $component_2 = '1';
            $component_3 = '1';
            $component_4 = '0';
            $component_5 = '0';
        } else if ($request['extra_component_count'] == '2') {
            $component_1 = '1';
            $component_2 = '1';
            $component_3 = '0';
            $component_4 = '0';
            $component_5 = '0';
        } else if ($request['extra_component_count'] == '1') {
            $component_1 = '1';
            $component_2 = '0';
            $component_3 = '0';
            $component_4 = '0';
            $component_5 = '0';
        } else {
            $component_1 = '0';
            $component_2 = '0';
            $component_3 = '0';
            $component_4 = '0';
            $component_5 = '0';
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
            'register_link' => $request['register_link'],
            'register_button_color' => $request['register_button_color'],
            'register_text_color' => $request['register_text_color'],
            'extra' => $extra,
            'extra_template' => $request['extra_template'],
            'extra_heading' => $request['extra_heading'],
            'extra_text' => $request['extra_text'],
            'extra_button_color' => $request['extra_button_color'],
            'extra_text_color' => $request['extra_text_color'],
            'extra_1' => $component_1,
            'extra_image_1' => $component_image_1,
            'extra_head_1' => $request['extra_1_image_head'],
            'extra_body_1' => $request['extra_1_image_body'],
            'extra_2' => $component_2,
            'extra_image_2' => $component_image_2,
            'extra_head_2' => $request['extra_2_image_head'],
            'extra_body_2' => $request['extra_2_image_body'],
            'extra_3' => $component_3,
            'extra_image_3' => $component_image_3,
            'extra_head_3' => $request['extra_3_image_head'],
            'extra_body_3' => $request['extra_3_image_body'],
            'extra_4' => $component_4,
            'extra_image_4' => $component_image_4,
            'extra_head_4' => $request['extra_4_image_head'],
            'extra_body_4' => $request['extra_4_image_body'],
            'extra_5' => $component_5,
            'extra_image_5' => $component_image_5,
            'extra_head_5' => $request['extra_5_image_head'],
            'extra_body_5' => $request['extra_5_image_body'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('event.index');
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
        $event->delete();
        return redirect()->back();
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
