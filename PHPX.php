<?php

function PHPX(){

    ?>
    <script>
        const elementos = Array.from(document.querySelectorAll('*')).filter(elemento => 
            elemento.tagName.toLowerCase().endsWith('@')
        );

        elementos.forEach(async (elemento) => {
            // Obtém o nome do elemento em minúsculas
            const nomeElemento = elemento.tagName.toLowerCase().replace('@', '');
            
            try {
                // Faz uma requisição para o template correspondente
                const response = await fetch(`../src/templates/${nomeElemento}.php`);
                
                // Verifica se a requisição foi bem-sucedida
                if (response.ok) {
                    const templateHTML = await response.text();
                    elemento.innerHTML = templateHTML; // Define o conteúdo do elemento
                } else {
                    console.error(`Erro ao carregar o template: ${response.statusText}`);
                }
            } catch (error) {
                console.error('Erro ao buscar o template:', error);
            }
        });
    </script>

<?php

}




?>