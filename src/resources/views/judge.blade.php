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
                <form action="{{url('/inspect')}}" method="POST">
                @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="txt" id="player1" class="form-control" placeholder="おなまえ1">
                        </div>
                        <div class="col-md-6">
                            <input type="txt" id="player2" class="form-control" placeholder="おなまえ2">
                        </div>
                    </div>
                    <br>
                    <div class="form-gtoup">
                            <input type="number" class="form-control mb2" id="trial" placeholder="回数を入力">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn3">
                        <span class='else'>じゃんけん!!!!</span>
                    </button>
                </form> 
                <br>
                
            </div>
       </div>
       <div class='col-sm-1 col-md-3'></div>
    </div>
</body>
@endsection