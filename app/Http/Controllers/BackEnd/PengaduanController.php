<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\aspirasi;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\input_aspirasi;

class PengaduanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pengaduan',
            'pengaduan' => input_aspirasi::latest()->get(),
        ];
        return view('backend.pages.pengaduan.index', $data);
    }

    public function detail($id)
    {
        $_dec = Crypt::decrypt($id);
        $data = [
            'title' => 'Detail Pengaduan',
            'laporan' => input_aspirasi::findOrfail($_dec),
        ];
        return view('backend.pages.pengaduan.detail', $data);
    }

    // public function update(Request $req, $id)
    // {
    //     Pengaduan::where(['id' => $id])->update([
    //         'status' => $req->status,
    //     ]);
    //     return redirect(route('pengaduan'))->with('status', 'Data Pengaduan Berhasil Diubah');
    // }

    public function tanggapan($id)
    {
        $_dec = Crypt::decrypt($id);
        $data = [
            'title' => 'Tanggapan',
            'pengaduan' => input_aspirasi::findOrfail($_dec),
        ];
        return view('backend.pages.tanggapan', $data);
    }

    public function storeTanggapan(Request $req, $id)
    {
        $req->validate([
            'tanggapan' => 'required',
            'status' => 'required'
        ]);

        $pengaduan = input_aspirasi::findOrfail($id);
        $pengaduan->update([
            'status' => $req->status,
        ]);

        aspirasi::create([
            'pengaduan_id' => $id,
            'user_id' => Auth::User()->id,
            'tanggapan' => $req->tanggapan
        ]);

        return redirect(route('pengaduan'))->with('status', 'Data Pengaduan Berhasil Ditanggapi');
    }

    public function createPDF()
    {
        $pengaduan = input_aspirasi::all();
        $pdf = PDF::loadView('backend.pages.pengaduan.pengaduan_pdf', ['pengaduan' => $pengaduan]);
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
