function check(){
    var user= document.getElementById('username').value.trim;
    var pass= document.getElementById('password').value.trim;
    if(user.test(/^[A-Za-z]{1,}$/, '')==''){
        alert('Masukkan username minimal 1 huruf!');
        return false;
    }
    if(pass.test(/^[A-Za-z]{4,}$/, '')==''){
        alert('Masukkan password 4 huruf!');
        return false;
    }
    return true;
}
