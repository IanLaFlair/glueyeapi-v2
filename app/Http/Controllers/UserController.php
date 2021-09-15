<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function __construct(UserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function index() {
        return view('user.index');
    }

    public function list_user(Request $request) {
        $params = [];
        $table_user = $this->userRepo->list($params);

        return DataTables::of($table_user)
                            ->addIndexColumn()
                            ->editColumn('created_at', function ($request) {
                                return $request->created_at->format('d F Y h:i:s'); // human readable format
                              })
                            ->make(true);
    }

}
