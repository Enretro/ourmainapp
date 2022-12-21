<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {
        // imagine we loaded data from database
        $ourName = 'En';
        $animals = ['Mijaav', 'Howsalot', 'Pursalot'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Barksalot']);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
