<?php

namespace w3nck3\Inspire\Controllers;

use Illuminate\Http\Request;
use w3nck3\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
