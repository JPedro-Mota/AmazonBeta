
function search() {
   
    const inputElement = document.getElementById('rectangle-1');
    const inputValue = inputElement.value.toLowerCase(); // Converter para minúsculas para evitar problemas de capitalização

    
    const pageMappings = {
      'inicio': '../html/index.html',
      'sobre': '../html/sobre.html',
      'logistica': '../html/logistica.html', 
      'login': '../html/login.html',
      'cadastro': '../html/cadastro.html'
    };

    if (pageMappings.hasOwnProperty(inputValue)) {
      
      window.location.href = pageMappings[inputValue];
    } else {
      console.log('Nenhuma correspondência encontrada para:', inputValue);
    }
  }
