// fungsi untuk membersihkan output dengan tombol "C" sehingga nilainya menjadi 0
function clearOutput() {
    document.getElementById("output").innerHTML = "0";
}

// fungsi untuk menghapus angka 0 dan menggantinya dengan null atau kosong " "
function removeZero() {
    var value = document.getElementById("output").innerHTML;
    if (value == "0") {
        value = " "
        document.getElementById("output").innerHTML = value;
    }
}

// fungsi untuk menghitung persentase
function perc() {
    removeZero()
    var value = document.getElementById("output").innerHTML;
    value = value/100
    document.getElementById("output").innerHTML = value;
}

// fungsi untuk menampilkan angka/simbol
function fordisplay(myvalue) {
    removeZero()
    document.getElementById("output").innerHTML += myvalue
}

// fungsi untuk menyelesaikan/menghitung pada kalkulator
function solve() {
    removeZero()
    var equation = document.getElementById("output").innerHTML;
    var solved = eval(equation);
    document.getElementById('output').innerHTML = solved;
}

// fungsi untuk menampilkan pop up setelah klik tombol "info"
function info() {
    alert("Kalkulatorku adalah aplikasi kalkulator sederhana.")
}