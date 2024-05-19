<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    /**
     * Middleware ini bertujuan untuk memeriksa apakah pengguna yang membuat permintaan memiliki peran 'ADMIN'. Jika ya, maka permintaan tersebut diteruskan ke langkah berikutnya dalam siklus permintaan. Jika tidak, pengguna akan dialihkan ke rute tertentu. 
     * Tujuan Middleware: Memeriksa apakah pengguna memiliki peran 'ADMIN'.
     * Jika Pengguna Adalah Admin: Permintaan diteruskan ke langkah berikutnya (controller atau middleware berikutnya).
     * Jika Pengguna Bukan Admin: Pengguna dialihkan ke halaman lain (rute 'front.index').
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role == 'ADMIN') {
            return $next($request);
        }

        return redirect()->route('front.index');
    }
}
