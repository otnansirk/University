@extends('layouts.app')
@section('container')

<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Data Terkini Covid-19</h1>
    <p class="lead" id="grafik">Data terupdate untuk mengetahui status covid-19.</p>
</div>

<div class="container mt-2 d-none d-lg-block">
  {!! $chart->render() !!}
</div>

<div class="container mt-2" id="indonesia">   
  
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
      <h3 class="card-title">Data Kasus Covid-19 Berdasarkan Provinsi di Indonesia.</h3>
    </div>
      <div class="col-md-4 col-sm-6 mb-1">
        <div class="card card-block bg-success text-white">
            <h5 class="card-title mt-3 mb-3">Total Sembuh</h5>
            <h1>{{ $data->sembuh }}</h1>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-1">
        <div class="card card-block bg-warning text-white">
            <h5 class="card-title mt-3 mb-3">Total Positif</h5>
            <h1>{{ $data->positif }} <small style="font-size: 12px">Orang</small></h1>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-1">
        <div class="card card-block bg-danger text-white">
            <h5 class="card-title mt-3 mb-3">Total Meninggal</h5>
            <h1>{{ $data->meninggal }}</h1>
        </div>
      </div>
    </div>
</div>
<div class="container mt-2">
  <div class="row row-cards">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
      <h3 class="card-title">Data Kasus Covid-19 Berdasarkan Provinsi di Indonesia.</h3>
      <div class="card">
        <div class="card-header ">
          <div class="input-group">
            <span class="input-group-append">
              <div class="input-group-text bg-transparent"><i class="material-icons">search</i></div>
            </span>
            <input class="form-control py-2 border-0 border pl-5" type="search" placeholder="search"
            id="inputSearchProv" onkeyup="searchFunction('inputSearchProv', 'tableProv')">
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive service">
            <table class="table table-bordered table-hover mb-0 text-nowrap css-serial" id="tableProv">
              <thead>
                <tr>
                  <th class="atasbro">No.</th>
                  <th class="atasbro">Provinsi</th>
                  <th class="atasbro">Sembuh</th>
                  <th class="atasbro">Positif</th>
                  <th class="atasbro">Meninggal</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($dataProv as $key => $prov)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{ $prov->attributes->Provinsi }}</td>
                    <td>{{ number_format($prov->attributes->Kasus_Semb) }}</td>
                    <td>{{ number_format($prov->attributes->Kasus_Posi) }}</td>
                    <td>{{ number_format($prov->attributes->Kasus_Meni) }}</td>
                  </tr>
                @endforeach 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div><!-- COL END -->
  </div>
</div>
  
<div class="container mt-2" id="global">
  <div class="row row-cards">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
      <h3 class="card-title">Data Kasus Covid-19 Berdasarkan Negara di Dunia.</h3>
      <div class="card">
        <div class="card-header ">
          <div class="input-group">
            <span class="input-group-append">
                <div class="input-group-text bg-transparent"><i class="material-icons">search</i></div>
            </span>
            <input class="form-control py-2 border-0 border pl-5" type="search" placeholder="search"
            id="inputSearchCountry" onkeyup="searchFunction('inputSearchCountry', 'tableCountry')">
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive service">
            <table class="table table-bordered table-hover mb-0 text-nowrap css-serial " id="tableCountry">
              <thead>
                <tr>
                  <th class="atasbro">No.</th>
                  <th class="atasbro">Negara</th>
                  <th class="atasbro">Sembuh</th>
                  <th class="atasbro">Positif</th>
                  <th class="atasbro">Meninggal</th>
                  <th class="atasbro">Update Terakhir</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($dataGlob->Countries as $key => $prov)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{ $prov->Country }}</td>
                    <td>{{ number_format($prov->TotalRecovered )}}</td>
                    <td>{{ number_format($prov->TotalConfirmed) }}</td>
                    <td>{{ number_format($prov->TotalDeaths) }}</td>
                    <td>{{ 
                      date_format(date_create($prov->Date), "d M Y")
                    }}</td>
                  </tr>
                @endforeach 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div><!-- COL END -->
  </div>
</div>

  {{-- News  --}}
<div class="container mt-3" id="informasi">   
  
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14 ">
      <h3 class="card-title">
        <center>Berita dan Informasi Seputar Kesehatan di Indonesia.</center>
      </h3>
    </div>
    @foreach ($news->articles as $new)
      <div class="col-md-3 col-sm-6 mb-1">
        <div class="card card-block ">
          <h4 class="card-title text-right">
            <a href="{{ $new->url }}" target="__blank">
              <i class="material-icons">open_in_new</i>
            </a>
          </h4>
        <img src="{{ $new->urlToImage }}" alt="Photo of sunset">
          <h5 class="card-title  mt-3 mb-3">{{ $new->title }}</h5>
          <p class="card-text">{{ $new->description }}</p> 
        </div>
      </div>
    @endforeach
    </div>
  </div>
@endsection