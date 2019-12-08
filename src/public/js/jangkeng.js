function jangkeng() {
    var trial = document.getElementById('trial').value;
    trial = parseInt(trial, 10);
    var isInt = Number.isInteger(trial);

    if(trial <= 0){
        alert("正の整数を入力してください");
    }else if(isInt === false){
        alert("正の整数を入力してください");
    }else if(trial > 0){
        alert("このページは、あなたのデバイスに"+trial+"回の計算を行わせます。回数によってはデバイスの動作が不安定になるなどの問題が発生するかもしれません。予めご了承ください");
    }else{
        alert("数値を入力してください");
    }
}