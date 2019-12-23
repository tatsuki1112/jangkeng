@extends('layouts.app')

@section('content')
    <body>
    <div class='container-fluid'>
        <p class='title'><span class='insphilite'>結果!!!</span>一覧!!!!</p>
    </div>
    <div class='row'>
        <div class='col-sm-1 col-md-3'></div>
        <div class='col-sm-12 col-md-6'>
            <img src="{{ asset('/image/robotsBG.png')}}" class='img-fluid mx-auto d-block'>
            <h4>総回数{{$totalTrial}}</h4>
            <br>
            <h4>グー{{$totalGu}}</h4>
            <br>
            <h4>ちょき{{$totalChoki}}</h4>
            <br>
            <h4>パー{{$totalPah}}</h4>
            <br>
            <h4>最大{{$totalMax}}</h4>
            <br>
            <div class="coutainer-fluid">

                <br>
                <div class="form-group">
                    <input type="number" class="form-control form-control-lg" id="trial" placeholder="回数を入力">
                </div>

                <br>
                <!--<button type="button" class="btn3" data-toggle="modal" data-target="#modal1">-->
                <button type="button" class="btn3" onClick = "jangkeng();">
                    <span class='else'>じゃんけん!!!!</span>
                </button>


            </div>
        </div>
        <div class='col-sm-1 col-md-3'></div>
    </div>
    </body>
@endsection
