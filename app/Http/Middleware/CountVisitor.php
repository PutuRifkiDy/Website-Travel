<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class CountVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // $file = storage_path('visitor_count.txt');

        // // Jika file tidak ada, buat file dengan angka 0
        // if (!file_exists($file)) {
        //     file_put_contents($file, 0);
        // }

        // // Ambil angka terakhir, tambahkan 1, lalu simpan lagi
        // $count = (int) file_get_contents($file);
        // $count++;
        // file_put_contents($file, $count);
        
        $visitorFile = storage_path('visitor_count.txt');
        $ipFile = storage_path('visitor_ips.txt');


        // Jika file tidak ada, buat file dengan nilai awal
        if (!file_exists($visitorFile)) {
            file_put_contents($visitorFile, 0);
            chmod($visitorFile, 0777);
        }
        if (!file_exists($ipFile)) {
            file_put_contents($ipFile, '');
            chmod($ipFile, 0777);
        }

        // Ambil alamat IP pengunjung
        $ip = $request->ip();

        // Ambil daftar IP yang sudah tercatat
        $ips = file($ipFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Jika IP belum tercatat, tambahkan dan naikkan hitungan
        if (!in_array($ip, $ips)) {
            file_put_contents($ipFile, $ip . PHP_EOL, FILE_APPEND);

            // Ambil jumlah pengunjung dari file
            $count = (int) file_get_contents($visitorFile);
            $count++;

            // Simpan kembali jumlah pengunjung
            file_put_contents($visitorFile, $count);
        }


        return $next($request);
    }
}
