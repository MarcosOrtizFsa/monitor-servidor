@props([
    'titulo',
    'campo',
    'color',
    'tipo' => 'linea',
])

<section {{ $attributes->class('card') }}>
    <div class="grafico-head">
        <span class="label">{{ $titulo }}</span>
        <span class="value" id="valor-{{ $campo }}">--</span>
    </div>

    <canvas
        data-grafico="{{ $campo }}"
        data-tipo="{{ $tipo }}"
        data-color="{{ $color }}"
        aria-label="{{ $titulo }}"
        role="img"
    ></canvas>
</section>
