let input_idade =  document.querySelector("#idade");

input_idade.addEventListener("blur",function(){
	let data = document.querySelector("#idade").value;
	
	let dia = data.slice(0,2);
	let mes = data.slice(3,5);
	let ano = data.slice(6, 10);
	
	let data_atual = new Date();//criando um objeto com a Data Atual
	data_atual = data_atual.getFullYear();// isolando o Ano Atual
	
	let idade = data_atual - ano;

	if( idade<=7 || idade >= 100){
		document.querySelector("#idade").value = "";
	}
	if(dia == 0 || dia > 31){
		document.querySelector("#idade").value = "";
	}
	if(mes == 0 || mes > 12){
		document.querySelector("#idade").value = "";
	}
});

