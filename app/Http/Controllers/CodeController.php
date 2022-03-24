<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Code;

use App\Services\CodeService;

class CodeController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $codes = Code::with('user')->get();
        return view('code', compact('codes'));
    }
    public function create()
    {
        return view('create');
    }
    public function createCodes(Request $request)
    {
        $answear = CodeService::create($request);
        return $answear;
    } 
    public function delete()
    {
        return view('delete');
    }
    public function deleteCodes(Request $request)
    {
        $answear = CodeService::delete($request);
        return $answear;
    }
}