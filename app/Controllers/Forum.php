<?php

namespace App\Controllers;

class Forum extends BaseController
{
    public function index()
    {
        return view('forum');
    }

    public static function drawForum()
    {
        echo "baaazdmeg";
    }

    //--------------------------------------------------------------------
}
