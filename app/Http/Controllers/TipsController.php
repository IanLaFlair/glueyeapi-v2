<?php

namespace App\Http\Controllers;

use App\Repositories\TipsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class TipsController extends Controller
{
    public function __construct(TipsRepository $tipsRepo) {
        $this->tipsRepo = $tipsRepo;
    }

    public function index() {
        return view('tips.index');
    }

    public function list(Request $request) {
        $params = [];
        $table_tips = $this->tipsRepo->list();

        return DataTables::of($table_tips)
                            ->addIndexColumn()
                            ->editColumn('created_at', function ($request) {
                                    return $request->created_at->format('d F Y');
                                })
                            ->make(true);
    }

    public function store(Request $request) {
        if($request->isMethod('POST')) {
            $creator_id = Auth::user()->id;

            if($request->has('thumbnail')) {
                $paramsFilePhoto['name_folder'] = 'thumbnail_'
                                                    .date('Ymd').'_'.date('his');
                $paramsFilePhoto['name_file'] = 'thumbnail_'
                                                    .date('Ymd').'_'.date('his').'_'
                                                    .$request->file('thumbnail')->getClientOriginalName();
                $paramsFilePhoto['type_file'] = $request->file('thumbnail')->extension();

                $this->do_upload('thumbnail', $paramsFilePhoto['name_folder'], $paramsFilePhoto['name_file'], $request);
            }

            $params['title'] = $request->title;
            $params['detail'] = $request->detail;
            $params['created_by'] = $creator_id;
            $params['image'] = $paramsFilePhoto['name_file'];

            $this->tipsRepo->store($params);

            return redirect('list_tips');

        }
        return view('tips.create');
    }

    public function feed_tips() {
        return view('front.index');
    }

    public function do_upload($field = null, $location = null, $file_name = null, $request) {
        $uploadPath = public_path('upload/thumbnail/' . $location);

        if(!is_dir($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        $file = $request->file($field);
        $file->move($uploadPath, $file_name);

        return $file_name;
    }
}
