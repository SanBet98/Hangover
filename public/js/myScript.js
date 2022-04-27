

function checkNomeUtente(){
    nomeUtente = $("#inputNomeUtente");
    messaggioErrore=$("#invalidNomeUtente");
    var error = false;
    
    if(nomeUtente.val().trim() == "")
    {
        messaggioErrore.html("Il campo NomeUtente non può essere vuoto.");
        nomeUtente.focus();
        error=true;
    }
    
    if(!error)
    {
    
    $.ajax({
         url: '/ajax.php',
         type: 'GET',
         data: {'nomeUtente': nomeUtente.val().trim()},
         success: function (data){
             if(data.found){
                 messaggioErrore.html("Il nomeUtente esiste già nel database, scegline un altro.");
             }
             else
                 $("form[name=registrazione]").submit(); 
                 
         }
        });
  
    }
    
}