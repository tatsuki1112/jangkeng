function jangkeng() {
    let trial = document.getElementById('trial').value;
    trial = parseInt(trial, 10);
    const isInt = Number.isInteger(trial);

    if(trial <= 0){
        alert("正の整数を入力してください");
    }else if(isInt === false){
        alert("正の整数を入力してください");
    }else if(trial > 0){
        alert("このページは、あなたのデバイスに"+trial+"回の計算を行わせます。回数によってはデバイスの動作が不安定になるなどの問題が発生するかもしれません。予めご了承ください");
        let result = jangkenning(trial);
        alert(`cp1Win=${result[0]}\ncp2Win=${result[1]}\ngu=${result[2]}\nchoki=${result[3]}\npah=${result[4]}\npowerful=${result[5]}`);

    }else{
        alert("数値を入力してください");
    }

    function jangkenning(times) {
        let counter = 0;
        let cp1Win = 0;
        let cp2Win = 0;
        let gu = 0;
        let choki = 0;
        let pah = 0;
        let aiko = 0;
        let opt = {}
        let powerful
        while(counter < times){
            const cp1 = Math.floor(Math.random()*3);
            const cp2 = Math.floor(Math.random()*3);
            counter += 1;
            if(cp1 == 0 && cp2 == 1){
                cp1Win += 1;
                gu += 1;
            }
            else if(cp1 == 1 && cp2 == 2){
                cp1Win += 1;
                choki += 1;
            }
            else if(cp1 == 2 && cp2 == 2){
                cp1Win += 1;
                pah += 1;
            }
            else if(cp1 == cp2){
                counter -= 1;
                aiko += 1;
            }
            else if(cp2 == 0 && cp1 == 1){
                cp2Win += 1;
                gu += 1;
            }
            else if(cp2 ==1 && cp1 == 2){
                cp2Win += 1;
                choki += 1;
            }
            else if(cp2 == 2 && cp1 ==0){
                cp2Win += 1;
                pah += 1;
            }
        
        }
       
        return [cp1Win, cp2Win, gu, choki, pah, aiko, powerful];
        
    
    }
}
