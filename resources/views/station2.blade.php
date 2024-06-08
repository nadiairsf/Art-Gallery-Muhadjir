<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>IoT Sarana</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600'><link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <script src="https://kit.fontawesome.com/8e23d86a11.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" >
  <div class="row align-items-center" >
    <div class="col fs-3 text-center" style="color: #FB3B47;">
      <b>ID 1234</b><br>
      <b>ID SC1</b>
    </div>
    <div class="col fs-3">
      <b>Bogor - Jatinegara</b><br>
      <b>Argo Wilis</b> 
    </div>
    <div class="col">
      <ul class="fa-ul align-items-center">
        <li><i class="fa-li fas fa-temperature-high"></i> 25C in this room</li>
        <li><i class="fa-li fas fa-cloud-sun"></i> Sunny | 37C outside</li>
      </ul>
    </div>
    <div class="col text-end">
      <img src="logo-inka.svg" class="img mr-sm-0 float-right" width="100px"  alt="Responsive image">
    </div>
  </div>
</div>
<!-- partial:index.partial.html -->
@php
    $data = [
      ["plan"=>"13:00","eta"=>"13:05","next_station"=>"Pasar Minggu Baru","status"=>"passed"],
      ["plan"=>"13:10","eta"=>"13:15","next_station"=>"Pasar Minggu Baru","status"=>"passed"],
      ["plan"=>"13:18","eta"=>"13:20","next_station"=>"Pasar Minggu Baru","status"=>"now"],
      ["plan"=>"13:25","eta"=>"13:29","next_station"=>"Pasar Minggu Baru","status"=>null],
      ["plan"=>"13:35","eta"=>"13:40","next_station"=>"Pasar Minggu Baru","status"=>null],
      ["plan"=>"13:45","eta"=>"13:05","next_station"=>"Pasar Minggu Baru","status"=>null],
    ];
@endphp
<div class="timeline" style="background-color: #E6E6FA;">
  @foreach ($data as $item)
      @if ($item["status"] == "passed")
      <div class="entry">
        <div class="titledone">
        </div>
        <div class="body" style="color: rgb(145, 145, 145);">
          <div class="row align-items-center">
            <div class="col fs-6" style="max-width: 70px;">
             @php
                echo $item["eta"];
             @endphp
            </div>
            <div class="col fs-6">
              @php
                echo $item["next_station"];
              @endphp
            </div>
          </div>
        </div>
      </div>
      @elseif ($item["status"] == "now")
      <div class="entry">
        <div class="titleactive text-center" ">
          <h3>Plan</h3>
          <b class="fs-1">
            @php
                echo $item["plan"];
            @endphp
          </b>
          <p></p>
        </div>
  
        <div class="bodyactive">
          <div class="row align-items-center">
            <div class="col" style="max-width: 100px;">
            ETA
            </div>
            <div class="col">
            Next Station
            </div>
          </div>
          <div class="row align-items-center fs-1">
            <div class="col fs-2" style="max-width: 100px;">
            @php
                echo $item["eta"];
            @endphp
            </div>
            <div class="col fs-2">
              @php
                echo $item["next_station"];
            @endphp
            </div>
          </div>
          <div class="row align-items-center fs-5 ">
            <div class="col" style="max-width: 100px;">
            </div>
            <div class="col fs-4">
              Estimated late due to track maintance
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="entry">
        <div class="title">
        </div>
        <div class="body">
          <div class="row align-items-center">
            <div class="col fs-5" style="max-width: 70px;">
             @php
                 echo $item["eta"];
             @endphp
            </div>
            <div class="col fs-5">
              @php
                echo $item["next_station"];
              @endphp
            </div>
          </div>
        </div>
      </div>
      @endif
  @endforeach
  {{-- <div class="entry">
    <div class="titledone">
    </div>
    <div class="body" style="color: rgb(145, 145, 145);">
      <div class="row align-items-center">
        <div class="col fs-6" style="max-width: 70px;">
         12:22
        </div>
        <div class="col fs-6">
       Pasar Minggu Baru
        </div>
      </div>
    </div>
  </div> --}}
  {{-- <div class="entry">
      <div class="titleactive text-center">
        <h3>Plan</h3>
        <b class="fs-1">13:57</b>
        <p></p>
      </div>

    <div class="bodyactive">
      <div class="row align-items-center">
        <div class="col" style="max-width: 100px;">
         ETA
        </div>
        <div class="col">
        Next Station
        </div>
      </div>
      <div class="row align-items-center fs-1">
        <div class="col fs-2" style="max-width: 100px;">
         13:59
        </div>
        <div class="col">
         Duren Kalibata 
        </div>
      </div>
      <div class="row align-items-center fs-5 ">
        <div class="col" style="max-width: 100px;">
        </div>
        <div class="col">
        Estimated late due to track maintance
        </div>
      </div>
    </div>
  </div> --}}
  {{-- <div class="entry">
    <div class="title">
    </div>
    <div class="body">
      <div class="row align-items-center">
        <div class="col fs-5" style="max-width: 70px;">
         12:22
        </div>
        <div class="col fs-5">
       Pasar Minggu Baru
        </div>
      </div>
    </div>
  </div>
  <div class="entry">
    <div class="title">
    </div>
    <div class="body">
      <div class="row align-items-center">
        <div class="col fs-5" style="max-width: 70px;">
         12:22
        </div>
        <div class="col fs-5">
       Pasar Minggu Baru
        </div>
      </div>
    </div>
  </div>
  <div class="entry">
    <div class="title">
    </div>
    <div class="body">
      <div class="row align-items-center">
        <div class="col fs-5" style="max-width: 70px;">
         12:22
        </div>
        <div class="col fs-5">
       Pasar Minggu Baru
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- partial -->
  
</body>
</html>
