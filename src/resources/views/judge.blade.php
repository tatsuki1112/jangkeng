@extends('layouts.app')

@section('content')
<body>
    <div class='container-fluid'>
        <p class='title'><span class='insphilite'>勝敗</span>を決める!</p>
    </div>
    <div class='row'>
        <div class='col-sm-1 col-md-3'></div>
        <div class='col-sm-12 col-md-6'>
            <img src="{{ asset('/image/robotsBG.png')}}" class='img-fluid mx-auto d-block'>
            <br>
            <div class="coutainer-fluid">
               <!--<form action="{{url('/inspect')}}" method="POST">-->
                <!--@csrf-->
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="txt" id="player1" class="form-control form-control-lg" placeholder="おなまえ1">
                        </div>
                        <div class="col-md-6">
                            <input type="txt" id="player2" class="form-control form-control-lg" placeholder="おなまえ2">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                            <input type="number" class="form-control form-control-lg" id="trial" placeholder="回数を入力">
                        </div>
                    </div>

                    <button type="button" class="btn3" onclick="judge();">
                        <span class='else'>じゃんけん!!!!</span>
                    </button>
{{--                </form>--}}
            @include('judgeModal')
                <br>

            </div>
       </div>
       <div class='col-sm-1 col-md-3'></div>

</body>
@endsection
