<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DashboardRepository;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct(DashboardRepository $dashboardRepo) {
        $this->middleware('web');
        $this->dashboardRepo = $dashboardRepo;
    }

    public function index() {
        return view('dashboard.index');
    }

    public function dashboard_data() {
        $month = Carbon::today()->format('F');

        $count_user = $this->dashboardRepo->get_total_user();
        $count_image = $this->dashboardRepo->get_total_image();
        $count_tips = $this->dashboardRepo->get_total_tips();
        $count_data_month = $this->dashboardRepo->get_total_data_month();

        $data_json = array(
            'total_user' => $count_user,
            'total_image' => $count_image,
            'total_tips' => $count_tips,
            'total_data_month' => $count_data_month,
            'month' => $month
        );

        // $data['data'] = $data_json;

        return response($data_json, 200);
    }
}
