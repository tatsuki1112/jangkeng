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
            <h2 class="total">総回数<br><span class="hiliteTotal">{{$totalTrial}}</span>回!!!</h2>
            <br>
            <h2 class="total">グー総回数<br><span class="hiliteTotal">{{$totalGu}}</span>回!!!</h2>
            <br>
            <h2 class="total">チョキ総回数<br><span class="hiliteTotal">{{$totalChoki}}</span>回!!!</h2>
            <br>
            <h2 class="total">パー総回数<br><span class="hiliteTotal">{{$totalPah}}</span>回!!!</h2>
            <br>
            <h2 class="total">最大回数<br><span class="hiliteTotal">{{$totalMax}}</span>回!!!</h2>
            <br>
            <div class="coutainer-fluid">

                <form action="{{url('/')}}"method="GET">
                    <button type="submit" class="btn1">
                        <span class='else'>戻る!!!!</span>
                    </button>
                </form>



            </div>
        </div>
        <div class='col-sm-1 col-md-3'></div>
    </div>
    </body>
@endsection
