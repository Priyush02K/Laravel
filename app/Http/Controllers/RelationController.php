<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationController extends Controller
{
    //
    public function oneToOne() {
    $profile = \App\Models\Profile::with('traveler')->first();
    dd($profile);
}

public function oneToMany() {
    $author = \App\Models\Author::with('blogPosts')->first();
    dd($author);
}

public function manyToMany() {
    $teacher = \App\Models\Teacher::with('subjects')->first();
    dd($teacher);
}

public function hasManyThrough() {
    $country = \App\Models\Country::with('citizens')->first();
    dd($country);
}

public function polymorphic() {
    $event = \App\Models\Event::with('photos')->first();
    $hotel = \App\Models\Hotel::with('photos')->first();
    dd([$event, $hotel]);
}
}
