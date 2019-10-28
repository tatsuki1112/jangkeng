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
                <form action="{{url('/inspect')}}"method="POST">
                    <button type="submit" class="btn1">
                        <span class='hilite'>強い</span><span class='else'>手を探す!!!!</span>
                    </button>
                </form> 
                <br>
                <form action="{{url('/judge')}}"method="GET">
                <button type="submit" class="btn2">
                        <span class='hilite'>勝敗</span><span class='else'>を決める!!!!</span>
                    </button>
                </form>
            </div>
       </div>
       <div class='col-sm-1 col-md-3'></div>
    </div>
</body>
@endsection