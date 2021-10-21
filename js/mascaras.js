//CPF
function mascara(o,fun){
	v_obj=o;
	v_fun=fun;
	setTimeout("execmascara()",1);
}


function execmascara(){
	v_obj.value=v_fun(v_obj.value);
}


function cpf_mask(cpf){
	cpf=cpf.replace(/\D/g,"");                 //Remove tudo o que não é dígito
	cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2");    //Coloca ponto entre o terceiro e o quarto dígitos
	cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2");    //Coloca ponto entre o setimo e o oitava dígitos
	cpf=cpf.replace(/(\d{3})(\d)/,"$1-$2");   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
	return cpf;
}
 

//CELULAR
function cel_mask(telefone){ 
	telefone=telefone.replace(/\D/g,"");                 //Remove tudo o que não é dígito
	telefone=telefone.replace(/(\d{0})(\d)/,"$1($2");    //Coloca ponto entre o terceiro e o quarto dígitos
	telefone=telefone.replace(/(\d{2})(\d)/,"$1)$2");    //Coloca ponto entre o setimo e o oitava dígitos
	telefone=telefone.replace(/(\d{5})(\d)/,"$1-$2");   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
  return telefone;
}

//TELEFONE
function tel_mask(telefone){
	console.log(telefone.length);
	telefone=telefone.replace(/\D/g,"");                 //Remove tudo o que não é dígito
	telefone=telefone.replace(/(\d{0})(\d)/,"$1($2");    //Coloca ponto entre o terceiro e o quarto dígitos
	telefone=telefone.replace(/(\d{2})(\d)/,"$1)$2");    //Coloca ponto entre o setimo e o oitava dígitos
	telefone=telefone.replace(/(\d{4})(\d)/,"$1-$2");   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
	return telefone;
}


//CEP
function cep_mask(cep){ 
	cep=cep.replace(/\D/g,"");                 //Remove tudo o que não é dígito
	cep=cep.replace(/(\d{5})(\d)/,"$1-$2");    //Coloca ponto entre o terceiro e o quarto dígitos
  return cep;
}

//CNPJ
function cnpj_mask(cnpj){
	cnpj=cnpj.replace(/\D/g,"");                 //Remove tudo o que não é dígito
	cnpj=cnpj.replace(/(\d{2})(\d)/,"$1.$2");    //Coloca ponto entre o segundo e o terceiro dígitos
	cnpj=cnpj.replace(/(\d{3})(\d)/,"$1.$2");    //Coloca ponto entre o quito e o sexto dígitos
	cnpj=cnpj.replace(/(\d{3})(\d)/,"$1/$2");    //Coloca barra entre o oitavo e o novo dígitos
	cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2");    //Coloca traço entre o decimosegundo e o decimoterceiro dígitos
	return cnpj;
}