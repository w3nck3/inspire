<?php

namespace Wh\Inspire\Controllers;

use Illuminate\Http\Request;
use Wh\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
