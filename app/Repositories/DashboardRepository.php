<?php

namespace App\Repositories;

use App\Models\BloodSugar;
use App\Models\User;
use App\Models\Tips;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardRepository
{
    public function get_total_user() {
        $count_user = User::all()->where('role','user')->count();
        return $count_user;
    }

    public function get_total_image() {
        $count_image = BloodSugar::all()->count();
        return $count_image;
    }

    public function get_total_tips() {
        $count_tips = Tips::all()->count();
        return $count_tips;
    }

    public function get_total_data_month() {
        $today = Carbon::today();
        $count_data_month = BloodSugar::all()
                                        ->whereBetween('date_check', [$today->startOfMonth(), $today->endOfMonth()])
                                        ->count();

        return $count_data_month;
    }
}
