<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //

function showPraktikum2()
{
    return view('prak2web');
}

function showETS() {
    return view('ets') ;
}

function showPHP() {
    //source untuk data / proses bisnis yg di olah
    return view('tugasphp') ;
}

function showticket(Request $request) {
    //source untuk data / proses bisnis yg di olah
    return view('ticketphp') ;
}

}
