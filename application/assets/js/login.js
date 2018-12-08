$(document).on("submit", "#applicantlogin-form", function(event) {
  console.log("hello");

  event.preventDefault();

  var email = $(".ua").val();
  var password = $(".pa").val();
  var data = { email: email, password: password };
  console.log(data);
  $.ajax({
    type: "ajax",
    url: "./authentication/verify_seeker",
    method: "post",
    async: false,
    data: data,
    success: function(result) {
      if (result == 1) {
        window.location.reload(true);
      } else {
        $(".passworderror").removeClass("hidden");
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("Status: " + textStatus);
      alert("Error: " + errorThrown);
    }
  });
});
$(document).on("submit", "#recruiterlogin-form", function(event) {
  console.log("hello");

  event.preventDefault();

  var email = $(".ur").val();
  var password = $(".pr").val();
  var data = { email: email, password: password };
  console.log(data);
  $.ajax({
    type: "ajax",
    url: "./authentication/verify_recruiter",
    method: "post",
    async: false,
    data: data,
    success: function(result) {
      if (result == 1) {
        window.location.reload(true);
      } else {
        $(".passworderror").removeClass("hidden");
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("Status: " + textStatus);
      alert("Error: " + errorThrown);
    }
  });
});
$(function() {
  console.log("hello");
  $("#applicantlogin-form-link").click(function(e) {
    $("#applicantlogin-form")
      .delay(100)
      .fadeIn(100);
    $("#recruiterlogin-form").fadeOut(100);
    $("#recruiterlogin-form-link").removeClass("active");
    $(this).addClass("active");
    e.preventDefault();
  });
  $("#recruiterlogin-form-link").click(function(e) {
    $("#recruiterlogin-form")
      .delay(100)
      .fadeIn(100);
    $("#applicantlogin-form").fadeOut(100);
    $("#applicantlogin-form-link").removeClass("active");
    $(this).addClass("active");
    e.preventDefault();
  });
});
