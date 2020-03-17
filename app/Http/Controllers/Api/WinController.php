<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\WinService;

class WinController extends Controller
{
    protected $winService;

    public function __construct(WinService $winService)
    {
        //
        $this->winService = $winService;
    }

    public function index()
    {
        //
        return $this->respondSuccess($this->winService->index());
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
