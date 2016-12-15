
$(document).ready(function(){



  console.log("[ ok ]");
  $(".ajax").click(function(){

    url =this.dataset.url;
    console.log(url);
    $.ajax({
      method: "GET", // GET ou POST comme tu veut
      url: url, // La page qui va faire le traitement
      success : function(resultat){
        console.log(resultat);
        $('#myModal').modal('toggle');

        $("#content-modal").html(resultat);
      }
    })
  })


})
