<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionProduct;

use App\Rules\TechnologyRule;
use App\Rules\UploadSpeedRule;
use App\Rules\DownloadSpeedRule;

class HomeController extends Controller
{
    public function index()
    {

        $rules = [];
        $rules[] = [UploadSpeedRule::class, ['greaterThan:100', 'lessThan:300']];
        $rules[] = [TechnologyRule::class, ['fiber']];
        // $rules[] = [DownloadSpeedRule::class, ['greaterThan:100', 'lessThan:200']];

        $subscriptionProducts = SubscriptionProduct::filterBy($rules)->get();
        return view('subscription_products_list')->with([
            'subscriptionProducts' => $subscriptionProducts,
            'rules' => $rules
        ]);
    }
}
