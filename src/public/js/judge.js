function judge() {
    let trial = document.getElementById('trial').value;
    trial = parseInt(trial, 10);
    let result =jangkenning(trial);
    alert(result);
}
