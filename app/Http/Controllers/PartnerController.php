<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
class partnerController extends Controller
{
    public function index()
    {
        return view('dashboard.partner.index', [
            'page' => 'partners',
            'partner' => Partner::all()
        ]);
    }
}
