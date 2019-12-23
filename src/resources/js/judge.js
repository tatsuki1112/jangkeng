function judge() {
    let trial = document.getElementById('trial').value;
    let player1 = document.getElementById('player1').value;
    let player2 = document.getElementById('player2').value;
    trial = parseInt(trial, 10);
    const isInt = Number.isInteger(trial);

    // alert(trial);

    if(trial <= 0){
        alert("正の整数を入力してください");
    }else if(isInt === false){
        alert("正の整数を入力してください");
    }else if(trial > 0){
        if (player1 ===　"" || player2 === "" ) {
            alert('お名前を入力してください');
        } else {
            alert("このページは、あなたのデバイスに"+trial+"回の計算を行わせます。回数によってはデバイスの動作が不安定になるなどの問題が発生するかもしれません。予めご了承ください");
            let result = jangkenning(trial);
            judgeHtmlChange(result, player1, player2);
            $('#modal1').modal('show');
            setResult(result);
        }
    } else {
        alert("数値を入力してください");
    }

}


function judgeHtmlChange(result, player1name, player2name) {
    let player1 = result[0];
    let player2 = result[1];
    let winner;
    let image;
    if (player1 === player2) {
        alert('あいこ！もう一回');
        location.reload();
    }　else if (player1 < player2) {
        image = 'greenRobot.png';
        winner = player2name;

    } else {
        image = 'blueRobot.png';
        winner = player1name;
    }

    let src = $('.modal-body').children('img').attr('src');
    src = src.replace('kairo2.png', image);
    $('.modal-body').children('img').attr('src', src);
    //document.getElementById('trialResult').innerHTML = "100";
    $('.result > #winner').text(winner+ "!!!!");
    $('.result > #player1').text(player1name);
    $('.result > #player2').text(player2name);
    $('.result > #trialResult').text(result[7]);
    $('.result > #aikoResult').text(result[5]);
    $('.result > #cp1Result').text(result[0]);
    $('.result > #cp2Result').text(result[1]);
    $('.result > #guResult').text(result[2]);
    $('.result > #chokiResult').text(result[3]);
    $('.result > #pahResult').text(result[4]);



}
