@extends('layout.plantillaCliente')

@section('contenido_reservaciones')

@vite(['resources/css/stylem.css'])


<h1 style="text-align: center">Reservaciones</h1>

<br><div class="container3">
    <div class="left-box">

    <div class="rectangle">
       <table border="1" cellspacing="5" cellpadding="5">
        <tr> 
       <td> #Vuelo </td>   
       <td> </td>          
       <td> Fechas</td> 
       <td> </td>        
       <td>Precio total </td>
    </tr> 

    <tr> 
       <td> Asiento </td>            
       <td> </td>       
       <td>Hora de compra </td>
    </tr> 

    </table> <br>
    <button style="background-color : #d9534f; " > Cancelar reservación </button>
           </div>  
    </div>
</div>

<br><br>
<div class="container3">
<div class="rectangle">
       <table border="1" cellspacing="5" cellpadding="5">
        <tr> 
       <td> #Vuelo </td>   
       <td> </td>          
       <td> Fechas</td> 
       <td> </td>        
       <td>Precio total </td>
    </tr> 

    <tr> 
       <td> Asiento </td>            
       <td> </td>       
       <td>Hora de compra </td>
    </tr> 

    </table> <br>
    <h4> Ya no esta disponible </h4>
           </div>  
    </div>
</div>
@endsection