
<div class="modal fade" tabindex="-1" role="dialog" id="modal1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="label">勝ったのは...</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <img id = "judgeResultImage" src="{{asset('/image/kairo2.png')}}" id = judgeResultImage class='img-fluid mx-auto d-block'>
                <br>

                <h3 class="result"><span id="winner" class="hiliteResult"></span></h3>
                <h3 class="result">試行回数:<span id="trialResult" class="hiliteResult"></span>回</h3>
                <h3 class="result">あいこ:<span id="aikoResult" class="hiliteResult"></span>回</h3>
                <h3 class="result"><span id="player1" class="hiliteResult"></span><span>は</span><span id="cp1Result" class="hiliteResult"></span>回勝ちました</h3>
                <h3 class="result"><span id="player2" class="hiliteResult"></span><span>は</span><span id="cp2Result" class="hiliteResult"></span>回勝ちました</h3>
                <h3 class="result">グーで<span id="guResult" class="hiliteResult"></span>回</h3>
                <h3 class="result">チョキで<span id="chokiResult" class="hiliteResult"></span>回</h3>
                <h3 class="result">パーで<span id="pahResult" class="hiliteResult"></span>回勝ちました！</h3>
                <button type="button" class="sendResult" id="sendResult">戻る!!!!!</button>

            </div>
        </div>
    </div>
</div>
</div>

