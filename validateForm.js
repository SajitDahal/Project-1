function JSvalidate() {
  let errorres;
  let password = document.getElementById("pwd").value;
  let email = document.getElementById("email").value;
  let phone = parseInt(document.getElementById("phone").value);

  let Eregex = /^([\w])+@([\w]+\.)+[\w]{2,4}$/gi;
  let Pregex =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@#%])[A-Za-z0-9$#@%]{8,}$/gi;
  let Phregex = /^[9][0-9]{9}$/;

  let etest = Eregex.test(email);
  let ptest = Pregex.test(password);
  let phtest = Phregex.test(phone);

  if (!ptest) {
    errorres = "Please enter a valid Password (Aa-Zz,0-9,[$@#%])";
    if (password == null || password == "") {
      errorres = "Please Enter password";
    }
  }

  if (!etest) {
    errorres = "Invalid Email";
    if (email == null || email == "") {
      errorres = "Please Enter Email";
    }
  }

  if (!phtest) {
    errorres = "Invalid Phone";
    if (phone == null || phone == "") {
      errorres = "Please Enter Phone";
    }
  }

  alert(errorres);
}
