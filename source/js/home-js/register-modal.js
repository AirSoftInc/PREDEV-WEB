$(document).ready(function() {
    $('select').material_select();

    $("#userType").change(function () {
      const userType = document.getElementById("userType").value;
      console.log(userType);     
  });
});