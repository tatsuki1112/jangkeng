@extends('layouts.app')

@section('content')
<body>
    <div class='container-fluid'>
        <p class='title'><span class='insphilite'>最強</span>の一手を決める!</p>
    </div>
    <div class='row'>
        <div class='col-sm-1 col-md-3'></div>
        <div class='col-sm-12 col-md-6'>
            <img src="{{ asset('/image/robotsBG.png')}}" class='img-fluid mx-auto d-block'>
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

                     @include('inspectionModal')

            </div>
       </div>
       <div class='col-sm-1 col-md-3'></div>
    </div>
</body>
@endsection
