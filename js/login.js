
function search() {
   
    const inputElement = document.getElementById('rectangle-1');
    const inputValue = inputElement.value.toLowerCase(); // Converter para minúsculas para evitar problemas de capitalização

    
    const pageMappings = {
      'inicio': './index.html',
      'servicos': 'servicos.html',
      'logistica': 'logistica.html',
      'ajuda': 'ajuda.html', 
      'login': './login.html',
      'cadastro': './cadastro.html'
    };

    if (pageMappings.hasOwnProperty(inputValue)) {
      
      window.location.href = pageMappings[inputValue];
    } else {
      console.log('Nenhuma correspondência encontrada para:', inputValue);
    }
  }
