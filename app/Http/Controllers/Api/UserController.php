<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        //
        $this->userService = $userService;
    }

    public function index()
    {
        //
        return $this->respondSuccess($this->userService->index());
    }

    public function create()
    {
        //
    }

    public function store(RequestValidation $request)
    {
        //
    }

    public function show($user_id, $app_id)
    {
        //
        return $this->userService->show($user_id, $app_id);
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
        return $this->UserService->destroy($id);
    }

}
