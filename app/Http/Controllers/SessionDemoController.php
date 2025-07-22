<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionDemoController extends Controller
{
    public function index(Request $request)
    {
        return view('session-demo', [
            'sessionData' => $request->session()->get('username'),
            'hasUsername' => $request->session()->has('username'),
        ]);
    }

    public function set(Request $request)
    {
        $request->session()->put('username', 'Priyush');
        return redirect('/session-demo')->with('message', 'Session value set!');
    }

    public function get(Request $request)
    {
        return redirect('/session-demo')->with('message', 'Fetched from session: ' . $request->session()->get('username'));
    }

    public function remove(Request $request)
    {
        $request->session()->forget('username');
        return redirect('/session-demo')->with('message', 'Session value removed!');
    }

    public function clear(Request $request)
    {
        $request->session()->flush();
        return redirect('/session-demo')->with('message', 'All session data cleared!');
    }
}
