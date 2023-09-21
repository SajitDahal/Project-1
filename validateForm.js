// const regBtn = document.getElementById("regBtn");
// const donorname = document.getElementById("name");
// const phone = document.getElementById("phone");
// const email = document.getElementById("email");
// const address = document.getElementById("address");
// const pwd = document.getElementById("pwd");
// const cpwd = document.getElementById("cpwd");

// regBtn.addEventListener("click", () => {
//   validateForm();
// });

// const setError = (element, message) => {
//   const inputBox = element.parentElement;
//   const errorDisplay = inputBox.querySelector(".error-msg");

//   errorDisplay.innerText = message;
//   inputBox.classList.add("error");
//   inputBox.classList.remove("error");
// };

// const setSuccess = (element) => {
//   const inputBox = element.parentElement;
//   const errorDisplay = inputBox.querySelector(".error-msg");

//   errorDisplay.innerText = "";
//   inputBox.classList.add("success");
//   inputBox.classList.remove("error");
// };
// const isValidEmail = (email) => {
//   const re =
//     /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
//   return re.test(String(email).toLowerCase());
// };
// const validateForm = () => {
//   const nameValue = donorname.value.trim();
//   const phoneValue = phone.value.trim();
//   const emailValue = email.value.trim();
//   const addressValue = address.value.trim();
//   const pwdValue = pwd.value.trim();
//   const cpwdValue = cpwd.value.trim();

//   if (nameValue === "") {
//     setError(donorname, "Fullname is required");
//   } else {
//     setSuccess(donorname);
//   }
//   if (phoneValue === "") {
//     setError(phone, "Phone is required");
//   } else {
//     setSuccess(phone);
//   }

//   if (emailValue === "") {
//     setError(email, "Email is required!");
//   } else if (!isValidEmail(emailValue)) {
//     setError(email, "Please Provide a valid email!");
//   } else {
//     setSuccess(email);
//   }
//   if (addressValue === "") {
//     setError(address, "Address is required");
//   } else {
//     setSuccess(address);
//   }
//   if (pwdValue === "") {
//     setError(pwd, "Password is required");
//   } else if (pwdValue.length < 8) {
//     setError(pwd, "Password must be atleast 8 character.");
//   } else {
//     setSuccess(pwd);
//   }
//   if (cpwdValue === "") {
//     setError(cpwd, "Please confirm your password!");
//   } else if (cpwdValue !== pwdValue) {
//     setError(cpwd, "Password doesn't match!!");
//   } else {
//     setSuccess(cpwd);
//   }
// };
