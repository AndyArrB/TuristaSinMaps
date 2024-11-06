@extends('layout.plantillaCliente')

@section('contenido_inicio')

<link rel="stylesheet" href="{{ asset('css/styledhotelc.css') }}">

<div class="hotel-card">
    <h2 class="hotel-name">Hotel Paraíso del Caribe</h2>
    <div class="location">
        <span>Cancún, México</span> <span class="location-icon">📍</span>
    </div>
    <div class="hotel-images">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKIyXe_vi9gQrZ4mRgBZdV5Jj8HOGFmMBm_A&s" alt="Habitación" class="main-image">
        <div class="thumbnail-images">
            <img src="https://consejosdecancun.com/wp-content/uploads/2019/11/hotel-tijuana.jpeg" alt="Imagen piscina">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsyvL6apUW_rjECgLfCrBoy4_lcJgjAo5L7A&s" alt="Imagen playa">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP67TyOxXnT2UrYTAclcD3R3yrl8tCsZyRDA&s" alt="Exterior del hotel">
        </div>
    </div>
    <div class="description">Descripción:
    El Hotel Paraíso del Caribe es un lujoso resort de 5 estrellas ubicado en las deslumbrantes playas de Cancún, México. Ofrece una experiencia inigualable con acceso directo a la playa, vistas panorámicas al mar Caribe y una variedad de servicios de primera clase. Sus habitaciones son espaciosas, modernas y están decoradas con un estilo tropical que te hará sentir en un verdadero paraíso. Los huéspedes pueden disfrutar de una piscina infinita, spa, restaurantes gourmet y actividades acuáticas. Es el destino perfecto para aquellos que buscan relajarse y disfrutar de la naturaleza caribeña con un toque de lujo y comodidad.
    </div>
    <div class="reviews">Opiniones:
    "¡Un lugar de ensueño! El Hotel Paraíso del Caribe superó todas mis expectativas. La atención del personal es impecable, siempre atentos y dispuestos a ayudar. Las instalaciones están en perfectas condiciones, y la vista desde la habitación es espectacular.
    </div>
    <div class="rating">
        <span>Calificación</span>
        <span>⭐ ⭐ ⭐ ⭐ ⭐</span>
    </div>
    <div class="buttons">

        <button class="back-button"><a href="{{ route('hoteles') }}">Volver</a></button>
        <button class="reserve-button"><a href="{{ route('hoteles') }}">Reservar</a></button>
    </div>
</div>
@endsection