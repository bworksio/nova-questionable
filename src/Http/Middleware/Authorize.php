<?php

namespace Bworksio\NovaQuestionable\Http\Middleware;

use Bworksio\NovaQuestionable\NovaQuestionable;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaQuestionable::class)->authorize($request) ? $next($request) : abort(403);
    }
}
