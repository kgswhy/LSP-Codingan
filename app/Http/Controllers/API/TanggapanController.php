<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aspirasi;

class TanggapanController extends Controller
{
    // show all & detail tanggapan
    public function index($id = false)
    {
        if ($id) {
            $data = aspirasi::with(['user', 'pengaduan'])->where('pengaduan_id', $id)->first();
            return Helper::success($data, 'Data detail tanggapan berhasil diambil');
        } else {
            $data = aspirasi::with(['user', 'pengaduan'])->get();
            return Helper::success($data, 'Data tanggapan berhasil diambil');
        }
    }
}
