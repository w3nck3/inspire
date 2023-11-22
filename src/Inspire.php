<?php

namespace Wh\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt(): string
    {
        return Http::get('https://api.adviceslip.com/advice')['slip']['advice'];
    }
}
