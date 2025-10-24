// resources/js/app.js
import './bootstrap';
import * as bootstrap from 'bootstrap';

window.bootstrap = bootstrap;

function limpaFormularioCep() {
    document.getElementById('rua').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('cidade').value = '';
    document.getElementById('uf').value = '';
}

function meuCallback(conteudo) {
    if (!("erro" in conteudo)) {
        document.getElementById('rua').value = conteudo.logradouro;
        document.getElementById('bairro').value = conteudo.bairro;
        document.getElementById('cidade').value = conteudo.localidade;
        document.getElementById('uf').value = conteudo.uf;
    } else {
        limpaFormularioCep();
        alert("CEP não encontrado.");
    }
}

window.meuCallback = meuCallback;

document.addEventListener('DOMContentLoaded', function() {
    const campoCep = document.getElementById('cep');
    
    if (campoCep) {
        campoCep.addEventListener('blur', function() {
            const cep = this.value.replace(/\D/g, '');

            if (cep != "") {
                const validacep = /^[0-9]{8}$/;

                if (validacep.test(cep)) {
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";

                    const script = document.createElement('script');
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meuCallback';
                    document.body.appendChild(script);
                } else {
                    limpaFormularioCep();
                    alert("Formato de CEP inválido.");
                }
            } else {
                limpaFormularioCep();
            }
        });
    }
});