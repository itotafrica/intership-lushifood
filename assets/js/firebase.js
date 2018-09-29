
function login(){
    var mail = document.getElementById("ip-email").value;
    var pwd = document.getElementById("ip-pwd").value;
    
    firebase.auth().signInWithEmailAndPassword(mail, pwd).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    // ...

    window.alert("Error : " + errorMessage);
});
}