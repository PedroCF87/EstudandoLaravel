<h1>Comando If</h1>

@if ($value>100)
    <p>O valor é maior que 100.</p>
@else 
    <p>O valor é menor que 100.</p>
@endif

<h1>Comando For</h1>

@for ($i=0; $i<$value; $i++)
    - {{ $i+1 }}
@endfor
<hr/>

<h1>Comando While</h1>

@php 
    $c=0;
@endphp
@while ($c<$value)
    - {{ $c+1 }}
    @php 
        $c++;
    @endphp
@endwhile

<h1>Comando ForEach</h1>

@foreach ($minhaArray as $key => $item)
    <p>[{{ $loop->index }}] {{ $key }} => {{ $item }}</p>
@endforeach

<h1>Comando ForElse</h1>


@forelse ([] as $key => $item)
    <p>[{{ $loop->index }}] {{ $key }} => {{ $item }}</p>
@empty
    <p>Nenhum registro encontrado.</p>    
@endforelse

