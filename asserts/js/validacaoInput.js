$(document).ready(function() {

  $("#formCadastro").validate({
      
    rules: {
          titulo_postagem: {              
              maxlength: 50,
          },
          resumo_postagem: {
            maxlength: 150,
          },
          conteudo_postagem: {
            maxlength: 150,
          },
          url_postagem: {              
            maxlength: 250,
          },        
      },

      messages: {
          titulo_postagem: {
            maxlength: 'O título só pode ter até 50 caracteres.',
          },
          resumo_postagem: {
            maxlength: 'O resumo só pode ter até 150 caracteres.'
          },
          conteudo_postagem: {
            maxlength: 'O conteudo só pode ter até 150 caracteres.'
          },
          url_postagem: {
            maxlength: 'O título só pode ter até 250 caracteres.'
          },          
      },
      
  })
})

