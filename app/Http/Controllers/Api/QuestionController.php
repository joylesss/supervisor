<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\QuestionService;

class QuestionController extends Controller
{
    protected $questionService;

    public function __construct(QuestionService $questionService)
    {
        //
        $this->questionService = $questionService;
    }

    public function index()
    {
        //
        return $this->respondSuccess($this->questionService->index());
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
