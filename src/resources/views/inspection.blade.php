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
                    <button type="button" class="btn3" data-toggle="modal" data-target="#modal1">
                        <span class='else'>じゃんけん!!!!</span>
                    </button>
                    <div class="modal fade" tabindex="-1" role="dialog" id="modal1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h2 class="modal-title" id="label">いま一番強いのは...</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <div class="modal-body">
                                    
                                        <img src="{{ asset('/image/kairo2.png')}}" class='img-fluid mx-auto d-block'>
                                        <br>
                                        <br>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
       </div>
       <div class='col-sm-1 col-md-3'></div>
    </div>
</body>
@endsection