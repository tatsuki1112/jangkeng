
<div class="modal fade" tabindex="-1" role="dialog" id="modal1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h2 class="modal-title" id="label">いま一番強いのは...</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                
                    <img id = "jangkengResultImage" src="{{asset('/image/kairo2.png')}}" id = jangkengResultImage class='img-fluid mx-auto d-block'>
                    <br>
                    <br>
                    
                    <h3 class="result">試行回数:<span id="trialResult" class="hiliteResult"></span>回</h3>
                    <h3 class="result">あいこ:<span id="aikoResult" class="hiliteResult"></span>回</h3>
                    <h3 class="result">CPU1は<span id="cp1Result" class="hiliteResult"></span>回勝ちました</h3>
                    <h3 class="result">CPU2は<span id="cp2Result" class="hiliteResult"></span>回勝ちました</h3>
                    <h3 class="result">グーで<span id="guResult" class="hiliteResult"></span>回</h3>
                    <h3 class="result">チョキで<span id="chokiResult" class="hiliteResult"></span>回</h3>
                    <h3 class="result">パーで<span id="pahResult" class="hiliteResult"></span>回勝ちました！</h3>


                </div>
            </div>
        </div>
    </div>
</div>
 
