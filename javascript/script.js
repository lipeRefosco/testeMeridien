/* Sessao resgatar elemento da pagina e set variaveis */
let cabecalhoTabela = document.getElementsByTagName('th');
let classeAno = document.getElementsByClassName('ano');
let btn = document.getElementById('btn');
const dataAtual = new Date();


/* Sessao adicionar eventos */
for (let i = 0; i < classeAno.length; i++){
    classeAno[i].addEventListener("click", calculaIdade);
}
btn.addEventListener("click", alteraCorCabecalho);


/* Sessao Funcoes */
function calculaIdade()
{
    if( isNaN(this.textContent) ){
        return;
    }

    const idade = dataAtual.getFullYear() - this.textContent;
    const nome = this.previousElementSibling.textContent; // Pega o texto do elemento anterior
    const telefone = this.nextElementSibling.textContent; // Pega o texto do elemento posterior

    alert( `O ${nome}, tem ${idade} Anos e o telefone dele é ${telefone}!` );
}

function alteraCorCabecalho()
{
    for (let i = 0; i < cabecalhoTabela.length; i++) {
        console.log(i)
        cabecalhoTabela[i].style.color = "red";
    }
}