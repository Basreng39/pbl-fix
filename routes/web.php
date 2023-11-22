<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PenyewaController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\KamarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,"index"]);
Route::get("/login", [HomeController::class,"login"]);


Route::get("/penyewa",[PenyewaController::class,"index"]);


Route::get("/admin/kamar",[KamarController::class,"kamar"])->middleware("auth");
Route::get("/admin/tambah",[KamarController::class,"tambahKamar"])->middleware("auth");
Route::post("/admin/tambah",[KamarController::class,"store"])->middleware("auth");

Route::get("/admin/login",[AdminController::class,"login"])->middleware("guest")->name("login");
Route::post("/admin/login",[AdminController::class,"auth"]);
Route::post("/logout",[AdminController::class,"logout"]);

Route::get("/admin",[AdminController::class,"index"])->middleware("auth");

Route::get("/admin/penyewa/aktif",[AdminController::class,"penyewaAktif"])->middleware("auth");
Route::get("/admin/penyewa/tambah",[AdminController::class,"tambahPenyewa"])->middleware("auth");

Route::get("/admin/laporan",[AdminController::class,"laporan"])->middleware("auth");
Route::get("/admin/pembayaran",[AdminController::class,"pembayaran"])->middleware("auth");

Route::get("/penyewa/",[PenyewaController::class,"index"]);
Route::get("/penyewa/kos",[PenyewaController::class,"kosSaya"]);
Route::get("/penyewa/riwayat",[PenyewaController::class,"riwayat"]);
