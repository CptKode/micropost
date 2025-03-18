<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     *
     *
     * @param  $id  相手ユーザーのid
     * @return \Illuminate\Http\Response
     */
    public function store(string $id)
    {
        \Auth::user()->favorite(intval($id));

        return back();
    }

    /**
     *
     *
     * @param  $id  相手ユーザーのid
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        \Auth::user()->unfavorite(intval($id));

        return back();
    }
}
