<?php

namespace App\Http\Controllers;

use App\Http\Response\JsonRpcResponse;
use App\Models\LandingPage;

class ManagementController extends Controller
{
    public function activity(array $params)
    {
        $page = LandingPage::where('page_name',$params['pageName'])->first();
        if(!$page) {
            return JsonRpcResponse::error($params['pageName']." - Not found");
        }
        $page->activity = $page->activity + 1;
        $page->save();
        return JsonRpcResponse::success($params['pageName'].' - activity booked');
    }
}
