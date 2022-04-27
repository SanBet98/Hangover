/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkNomeUtente(){
    
    
    alert("Daje");
    
    nomeUtente = $("#inputNomeUtente");
    messaggioErrore= $("#invalid-input");
    alert(nomeUtente);
    var error = false;
    if(nomeUtente.val().trim() == "")
    {
        messaggioErrore.html("Il campo NomeUtente non può essere vuoto.");
        nomeUtente.focus();
        error=true;
    }
    
    
    
    if(!error)
    {
    alert("aooo");
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

