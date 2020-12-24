<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $baseurl = "https://api.kawalcorona.com";
    
    $alternativeBaseurl = "https://api.covid19api.com/summary";
    $weburl = "https://kawalcorona.com";
    
    $newsApiKey = "&apiKey=f064aef261404110b3e68b7661db3788";
    $newsurl = "http://newsapi.org/v2";
    $covidNews = "/top-headlines?country=id&category=health&q=kasus corona";

    $client = new Client();

    // Data Indonesia
    $url = "/indonesia";

    // Provinsi Indonesia
    $prov = "/indonesia/provinsi";

    $resIndo = $client->request('GET', $baseurl.$url);
    $dataIndo = json_decode($resIndo->getBody());
    
    $resProv = $client->request('GET', $baseurl.$prov);
    $dataProv = json_decode($resProv->getBody());

    $resGlob = $client->request('GET', $alternativeBaseurl);
    $dataGlob = json_decode($resGlob->getBody());

    $resNews = $client->request('GET', $newsurl.$covidNews.$newsApiKey);
    $dataNews = json_decode($resNews->getBody());

    $provIndo = collect($dataProv)->pluck('attributes.Provinsi');
    $provPosIndo = collect($dataProv)->pluck('attributes.Kasus_Posi');
    $provSemIndo = collect($dataProv)->pluck('attributes.Kasus_Semb');
    $provMenIndo = collect($dataProv)->pluck('attributes.Kasus_Meni');

    $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('bar')
        ->size(['width' => 400, 'height' => 200])
        ->labels($provIndo->all())
        ->datasets([
            [
                "label" => "Sembuh",
                'backgroundColor' => "#b5e3b9",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => $provSemIndo->all(),
            ],
            [
                "label" => "Positif",
                'backgroundColor' => "#e3e2b5",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => $provPosIndo->all(),
            ],
            [
                "label" => "Meninggal",
                'backgroundColor' => "#e3b5b5",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => $provMenIndo->all(),
            ]
        ])
        ->options([]);
        $data = [
            'data' => $dataIndo[0],
            'dataProv' => $dataProv,
            'dataGlob' => $dataGlob,
            'chart' => $chartjs,
            'news' => $dataNews
        ];
    
    return view('welcome', $data);
});
