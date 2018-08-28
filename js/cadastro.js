let input_idade =  document.querySelector("#idade");

input_idade.addEventListener("blur",function(){
	let data = document.querySelector("#idade").value;
	console.log(data);
	data = data.slice(6, 10);
	
	let data_atual = new Date();//criando um objeto com a Data Atual
	data_atual = data_atual.getFullYear();// isolando o Ano Atual
	
	let idade = data_atual - data;
	if(idade > 7){
		
	}
	else{
		alert('Ae menor vai te foder');
		document.querySelector("#idade").value = "";
	}
});

