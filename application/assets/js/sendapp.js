$(document).on("click", "#apply", function() {
  var jobid = $(this).attr("data");
  console.log("hello");
  $(this).html("Applying......", 500);
  var data = { job: jobid };
  var button = $(this);
  $.ajax({
    type: "ajax",
    url: "./seeker/applyJob",
    method: "post",
    async: false,
    data: data,
    success: function(result) {
      console.log(result);
      button.html("Applied", 500);
      button.css("backgroundColor", "green");
      button.prop("disabled", true);
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("Status: " + textStatus);
      alert("Error: " + errorThrown);
    }
  });
});
