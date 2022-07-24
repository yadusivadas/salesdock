<?php

namespace App\Services;

use App\Models\Lead;
use App\Models\Sale;
use App\Models\Relation;

use Illuminate\Http\Request;


class InjectorService {


    public function add(Request $request)
    {


    if ($request->lead_id) {
        $data = Lead::findorfail($request->lead_id);
    }
    if ($request->relation_id) {
        $data = Relation::findorfail($request->relation_id);
    }
    if (!isset($data)) {
        abort(404);
    }

    $sale = new Sale();
    $sale->first_name = $data->first_name ? $data->first_name : 'Unavailable';
    $sale->last_name = $data->last_name ? $data->last_name : 'Unavailable';
    $sale->postcode = $data->postcode ? $data->postcode : '0';
    $sale->city = $data->city ? $data->city : 'Unavailable';
    $sale->street_name = $data->street_name ? $data->street_name : 'Unavailable';
    $sale->save();

    return $sale;

    }

}
