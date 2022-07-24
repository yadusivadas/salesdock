<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Sale;
use App\Models\Relation;

use App\Services\InjectorService;


class HomeController extends Controller
{
    public function index()
    {

        $leads = Lead::all();
        $sales = Sale::all();
        $relations = Relation::all();
        return view('index')->with([
            'leads' => $leads,
            'sales' => $sales,
            'relations' => $relations
        ]);
    }

    public function sale(Request $request)
    {
        $test = InjectorService::add($request);

        return redirect('/')->with('success', 'Task completed');

    }
}
