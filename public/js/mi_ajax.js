//Verifica si C.I. existe
$(document).ready(function(){
  $('#ci').focusout(function(){
    var datos = $('#registro').serializeArray();
    $.ajax({
      url: "buscaPersona",
      type: "GET",
      data: datos
    }).done(function(data){
      if(data){
        $('#ci').focus();
        alert('Este C.I. ya se registro.\nCompruebe nuevamente por favor.');
        $('#ci').val("");
      }
    });
  });
});

//Verifica si CPT existe
$(document).ready(function(){
  $('#cpt').focusout(function(){
    var datos = $('#registro').serializeArray();
    $.ajax({
      url: "buscaCPT",
      type: "GET",
      data: datos
    }).done(function(data){
      if(data){
        $('#cpt').focus();
        alert('Este código CPT ya se registro.\nCompruebe nuevamente por favor.');
        $('#cpt').val("");
      }
    });
  });
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()