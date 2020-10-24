Testando Rota: 
<br/>
Nome = {{ $nome }}
<br/>
var1 = {{ $var1 }}

<br/><br/>
>> Concatenando: {{ $nome." ".$var1 }} 

<br/>
>> Calculando: 2 + 2 = {{ 2+2 }} 

<br/>
>> Operação ternária: {{ isset($teste)?$teste:"Outro valor" }} 

<br/>
>> Operação ternária simplificada: {{ $teste??"Outro valor" }} 

<br/>
>> Operação ternária simplificada com OR: {{ $teste or "Outro valor" }} 

<hr/>
{{ "<h1>Estudando Laravel</h1>" }}

<hr/>
{!! "<h1>Estudando Laravel</h1>" !!}