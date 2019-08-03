$(document).ready(function() {

  onInit();

  function onInit() {
    $('select').material_select();
  }

  $("#userType").change(function () {
    const userType = document.getElementById("userType").value;
    userTypeCheck(userType);
  });

  function userTypeCheck(userType) {
    switch (userType) {
      case "U":
        document.getElementById("emailAndRfc").innerHTML = getEmailonly();
        document.getElementById("inputAddress").innerHTML = "";
        document.getElementById("aditionalInfo").innerHTML = "";
      break;
      case "I":
          document.getElementById("emailAndRfc").innerHTML = getEmailAndRfc();
          document.getElementById("inputAddress").innerHTML = address();
          document.getElementById("aditionalInfo").innerHTML = aditionalInfo();
      break;
    }
  }
});