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
        htmlChange(result);

        $('#modal1').modal('show');

        alert(`cp1Win=${result[0]}\ncp2Win=${result[1]}\ngu=${result[2]}\nchoki=${result[3]}\npah=${result[4]}\naiko=${result[5]}\nPowerful=${result[6]}`);

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
        let opt = {};

        let powerful;
        while(counter < times){
            const cp1 = Math.floor(Math.random()*3);
            const cp2 = Math.floor(Math.random()*3);

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

            counter += 1;

        }
        opt = {"gu":gu, "choki":choki, "pah":pah, "aiko":aiko};

        powerful = Math.max(opt["gu"], opt["choki"], opt["pah"]);

        const result = Object.keys(opt).reduce((r, key)=> {
            return opt[key] === powerful ? key:r
        }, null);


        //console.log(opt);

        return [cp1Win, cp2Win, gu, choki, pah, aiko, result, times];


    }

    function htmlChange(result) {
        let image;
        let hand;
        if(result[6] === "gu") {
            image = "guKairo.png";
            hand = "グー";
        } else if(result[6] === "choki") {
            image = "chokiKairo.png";
            hand = "チョキ";
        } else if(result[6] === "pah"){
            image = "pahKairo.png";
            hand = "パー";

        }
        let src = $('.modal-body').children('img').attr('src');
        src = src.replace('kairo2.png', image);
        $('.modal-body').children('img').attr('src', src);
        //document.getElementById('trialResult').innerHTML = "100";
        $('.result > #trialResult').text(result[7]);
        $('.result > #aikoResult').text(result[5]);
        $('.result > #cp1Result').text(result[0]);
        $('.result > #cp2Result').text(result[1]);
        $('.result > #guResult').text(result[2]);
        $('.result > #chokiResult').text(result[3]);
        $('.result > #pahResult').text(result[4]);
        }



}
