$("li.ajax").click(function(){

url = this.data

  $.ajax({
    url: "test.html",
    context: document.body
  }).done(function() {
    $( this ).addClass( "done" );
  });



})
