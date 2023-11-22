<?php

namespace w3nck3\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt(): string
    {
        return Http::get('https://api.adviceslip.com/advice')['slip']['advice'];
    }
}
