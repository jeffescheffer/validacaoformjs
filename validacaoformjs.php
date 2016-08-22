<!DOCTYPE html>
<html>
<head>
	<title>script java script</title>
	<!--
A chamada para a função valida deverá ser incluida na própria tag do formulário(<form>), utilizando a palavra
onSubmit.
Por exemplo:
<form method="POST" action="processa_dados.php" onSubmit="return valida(this)">
-->
<script type="text/javascript">
	function valida (nomeform)
	{
		/*Para verificar se um determinado campo não foi deixado em branco, faremos o seguinte teste:*/
		if (nomeform.nomecampo.value == "") 
			{ alert ("Por favor digite o nome."); return false; }
		/*Para testar se um determinado caractere existe dentro de uma string, podemos utilizar a propriedade indexOf.
		Bastante útil para verificar campos de e-mail*/
		if (nomeform.emai.value.indexOf('@',0) == -1) 
			{ alert ("E-mail invalido"); return false; }
		/*Para testar se foi digitado um número minimo de caracteres...*/
		if (nomeform.cep.value.length < 5) 
			{ alert ("O CEP deve possuir 8 digitos!"); return false; } 
	}
</script>




</head>
<body>

</body>
</html>


