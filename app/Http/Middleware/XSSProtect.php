<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class XSSProtect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $input = array_filter($request->all());

        array_walk_recursive($input, function(&$input) {
            $input = strip_tags(str_replace(array("&lt;", "&gt;"), '', $input), '<span><p><a><b><i><u><strong><br><hr><table><tr><th><td><ul><ol><li><h1><h2><h3><h4><h5><h6><del><ins><sup><sub><pre><address><img><figure><embed><iframe><video><style>');
        });

        $request->merge($input);

        return $next($request);
    }
}
