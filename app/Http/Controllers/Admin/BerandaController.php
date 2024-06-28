<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Galeri;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BerandaController extends Controller
{
    public function index()
    {
        $totalBerita = News::count();
        $totalPengumuman = Announcement::count();
        $totalGaleri = Galeri::count();

        // Mengambil data upload 30 hari terakhir
        $endDate = Carbon::today();
        $startDate = $endDate->copy()->subDays(29);

        $uploadData = DB::table(DB::raw('(SELECT created_at FROM news UNION ALL SELECT created_at FROM announcements UNION ALL SELECT created_at FROM galeris) as uploads'))
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $dates = [];
        $uploadCounts = [];
        $currentDate = $startDate->copy();

        while ($currentDate <= $endDate) {
            $formattedDate = $currentDate->format('Y-m-d');
            $dates[] = $formattedDate;
            $uploadCounts[] = $uploadData->firstWhere('date', $formattedDate)->count ?? 0;
            $currentDate->addDay();
        }

        return view('admin.beranda.index', compact('totalBerita', 'totalPengumuman', 'totalGaleri', 'dates', 'uploadCounts'));
    }
}