<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function site()
    {
      $profile = Profile::where('id', 1)->first();

      $testemonials = Testimonial::all();
      return view('front.master', ['profile' => $profile, 'testemonials'=> $testemonials]);
    }
}
