<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\AppService;

class AppController extends Controller
{
    protected $appService;

    public function __construct(AppService $appService)
    {
        //
        $this->appService = $appService;
    }

    public function index()
    {
        //
        return $this->respondSuccess($this->appService->index());
    }

    public function create()
    {
        //
    }

    public function store(RequestValidation $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
