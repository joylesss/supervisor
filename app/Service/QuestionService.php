<?php
namespace App\Service;

use Illuminate\Http\Request;
use App\Model\Questions;

class QuestionService {

    public function index()
    {
        //
        return  Questions::DataTablePaginate();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
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
