@extends('layout.plantillaCliente')
@section('contenido_inicio')


<link rel="stylesheet" href="{{ asset('css/stylevuelosc.css') }}">
<script src="{{ asset('js/jsvueloc.js') }}"></script>

<div class="content">
    <aside class="filters">
        <h3>Filtrar por...</h3>

        <div class="filter-group">
            <h4 class="filter-title">Aerolíneas</h4>
            <div class="filter-options">
                <label><input type="checkbox"> Aerolínea 1</label>
                <label><input type="checkbox"> Aerolínea 2</label>
                <label><input type="checkbox"> Aerolínea 3</label>
            </div>
        </div>

        <div class="filter-group">
            <h4 class="filter-title">Escalas</h4>
            <div class="filter-options">
                <label><input type="checkbox"> Directo</label>
                <label><input type="checkbox"> 1 Escala</label>
                <label><input type="checkbox"> 2+ Escalas</label>
            </div>
        </div>

        <div class="filter-group">
            <h4 class="filter-title">Precio</h4>
            <div class="filter-options">
                <label><input type="radio" name="precio"> Menos de $100</label>
                <label><input type="radio" name="precio"> $100 - $500</label>
                <label><input type="radio" name="precio"> Más de $500</label>
            </div>
        </div>

        <div class="filter-group">
            <h4 class="filter-title">Horarios</h4>
            <div class="filter-options">
                <label><input type="checkbox"> Mañana</label>
                <label><input type="checkbox"> Tarde</label>
                <label><input type="checkbox"> Noche</label>
            </div>
        </div>
    </aside>

    <main class="search-results">
                <div class="search-bar">
                    <input type="text" placeholder="Buscar...">
                </div>
            <div class="flight-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNE3jp4-GeR-34je4qK2034L63HJ2UdqXnHA&s" alt="" srcset="">
                <p>BA7890</p>
                <p>British Airways</p>
                <p>Salida 9:15 PM - Llegada 11:20 AM (día siguiente)</p>
                <p>Directo</p>
                <p>$600 USD</p>
            </div>
            <br>
            <div class="flight-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiBQec2jip7dTe-nitOMPcmef1B3k11jyfnw&s" alt="" srcset="">
                <p>MX1234</p>
                <p>Aeroméxicoa</p>
                <p>Salida 10:00 AM - Llegada 3:00 PM</p>
                <p>Directo</p>
                <p>$350 USD</p>
            </div>
            </div>
            </main>
        </div>
</div>

@endsection