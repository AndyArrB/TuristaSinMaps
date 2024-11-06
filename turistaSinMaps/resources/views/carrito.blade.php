@extends('layout.plantillaCliente')

@section('contenido_inicio')

<link rel="stylesheet" href="{{ asset('css/stylecartc.css') }}">

<center><div class="carrito">
    <h2>Carrito de Compra <span class="refresh-icon">🔄</span></h2>

    <div class="cart-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRfPvmRp2A8nI1aXyI2Wh6aL4aGn0g56JXiw&s" alt="" srcset="">

        <div class="item-details">
            <p><strong>Nombre del Hotel:</strong></p>
            <p><strong>Ubicación:</strong> Cancún, México</p>
            <p><strong>Fechas:</strong> 15/12/2023 - 20/12/2023</p>
            <p><strong>Noches:</strong> 5</p>
        </div>
        <div class="price-final">
            <p><strong>Precio Final:</strong> $1,500 USD</p>
            <button type="submit" class="delete-button">Eliminar</button>
            
        </div>
    </div>
    
    <div class="cart-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUeJu1LJueK4dAeJ7M3_E3mNTYeTBvpCdfxw&s" alt="" srcset="">
        <div class="item-details">
        <p><strong># Vuelo:</strong> MX1234</p>
            <p><strong>Origen:</strong> CDMX</p>
            <p><strong>Destino:</strong> Roma</p>
            <p><strong>Fechas:</strong> 05/01/2024 - 10/01/2024</p>
            <p><strong>Asientos:</strong> 2</p>
            <p><strong>Clase:</strong> Económica</p>
        </div>
        <div class="price-final">
            <p><strong>Precio Final:</strong> $1,500 USD</p>
            <button type="submit" class="delete-button">Eliminar</button>
            
        </div>
        </div>
        </div>
        

    <div class="summary">
        <h2>Resumen de Compra</h2>
        <div class="summary-details">
        <p><strong># Vuelo:</strong> MX1234</p>
        <p><strong>Fechas:</strong> 05/01/2024 - 10/01/2024</p>
        <p><strong>Asientos:</strong> 2</p>
        <p><strong>Nombre del hotel:</strong> Hotel Paraíso del Caribe</p>
        <p><strong>Fechas:</strong> 15/12/2023 - 20/12/2023</p>
        <p><strong>Noches:</strong> 5</p>
        </div>
        <div>
            <p><strong>Total a pagar:</strong></p>
            <div class="total-price">$3,700 USD</div>
        </div>
        <button type="submit">Finalizar pago</button>
</div></center>


@endsection
