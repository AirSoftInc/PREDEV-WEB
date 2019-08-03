$(document).ready(function() {

  onInit();

  function onInit() {
    $('select').material_select();
    userTypeCheck("U") 
  }

  $("#userType").change(function () {
    const userType = document.getElementById("userType").value;
    userTypeCheck(userType);
  });

  function userTypeCheck(userType) {
    switch (userType) {
      case "U":
        document.getElementById("emailAndRfc").innerHTML = getEmailonly();
        document.getElementById("lastName").innerHTML = getLastNames();
        document.getElementById("inputAddress").innerHTML = "";
        document.getElementById("aditionalInfo").innerHTML = "";
        $("#emailAndRfc").removeClass("mt-40");
      break;
      case "I":
          document.getElementById("emailAndRfc").innerHTML = getEmailAndRfc();
          document.getElementById("inputAddress").innerHTML = address();
          document.getElementById("aditionalInfo").innerHTML = aditionalInfo();
          document.getElementById("lastName").innerHTML = "";
          $("#emailAndRfc").addClass("mt-40");
      break;
    }
  }
});