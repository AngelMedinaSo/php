var nome = prompt("Qual é o seu nome?");

document.write('<form id="formNome" method="POST" action="">');
document.write('<input type="hidden" name="nome" value="' + nome + '">');
document.write("</form>");
document.getElementById("formNome").submit();
