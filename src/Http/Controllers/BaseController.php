<?php

namespace Bworksio\NovaQuestionable\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BaseController
{
    public function hello() {
        return response()->json([
            'hi' => true
        ]);
    }

}
