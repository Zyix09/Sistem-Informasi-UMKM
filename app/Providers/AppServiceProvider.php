<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        RateLimiter::for("login", function () {
            Limit::perMinute(5);
        });
        Paginator::useBootstrap();
        JsonResource::withoutWrapping();
        // Menggunakan Closure
        View::composer(
            '*',
            function ($view) {
                $userId = auth()->id();
                if ($userId) {
                    // $keranjangItems = Keranjang::where('user_id', $userId)->get();
                    $keranjangItems = DB::table('keranjangs')
                        ->Join('items', 'keranjangs.item_id', '=', 'items.id')
                        ->select(
                            'keranjangs.jarak',
                            'keranjangs.total_harga',
                            'keranjangs.user_id',
                            'items.nama_barang',
                            'items.harga_barang',
                        )->where('keranjangs.user_id', $userId)->get();

                    $totalItemCount = $keranjangItems->count();
                    $view->with('keranjangItems', $keranjangItems)
                        ->with('totalItemCount', $totalItemCount);
                }
            }
        );
    }
}
