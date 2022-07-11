<?php

namespace App\Http\Controllers;

use App\Services\BreadcrumbsService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $breadcrumbs;

    public function __construct()
    {
        $service = new BreadcrumbsService();

        $this->breadcrumbs = $service->breadcrumbs();
    }
}
