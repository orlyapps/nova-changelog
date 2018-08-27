<?php

namespace Orlyapps\NovaChangelog\Http\Middleware;

use Orlyapps\NovaChangelog\NovaChangelog;

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
        return resolve(NovaChangelog::class)->authorize($request) ? $next($request) : abort(403);
    }
}
