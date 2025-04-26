<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Services\PremierLeagueApiService;
use Illuminate\Http\Request;
class PremierLeagueController extends Controller
{
protected $apiService;
// Menambahkan dependensi pada constructor php artisan make:controller Api/PremierLeagueController
public function __construct(PremierLeagueApiService
$apiService)
{
$this->apiService = $apiService;
}
// Method untuk mendapatkan semua tim
public function getAllTeams()
{
// Ambil data tim dari API
$teams = $this->apiService->getAllTeams();
return response()->json($teams);
}
}
