$(document).on("submit", ".form-horizontal", function(event) {
  event.preventDefault();
  var position = $("#inputposition").val();
  var posted_by = $("#inputcompany").val();
  var salary = $("#inputsalary").val();
  var description = $("#textArea").val();
  var data = {
    position: position,
    posted_by: posted_by,
    salary: salary,
    description: description
  };
  console.log(data);
  $.ajax({
    type: "ajax",
    url: "../recruiter/post",
    method: "post",
    async: false,
    data: data,
    success: function(result) {
      if (result == 1) {
        window.location.href = "./recruiter";
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("Status: " + textStatus);
      alert("Error: " + errorThrown);
    }
  });
});
