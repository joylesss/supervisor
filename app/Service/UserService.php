<?php
namespace App\Service;

use Illuminate\Http\Request;
use App\Model\Users;

class UserService {

    public function index()
    {
        //
        return Users::DataTablePaginate();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($user_id, $app_id)
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
