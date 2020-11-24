<!DOCTYPE html>
<html>
<head>
    <title>Hola hijo de tu puta madre</title>
</head>
<body>
    <p>.::Solicitud de cotización::.</p>
    <p>Nombre del solicitante: {{$msj['name']}}</p>
    <p>Tel. {{$msj['phone']}}</p>
    @if($msj['recoger'] == 1)
        <p><strong>Se recogería en la fabrica.</strong></p>
    @elseif($msj['recoger'] == 0)
        <p><strong>Se enviaría el producto.</strong></p>
    @endif
    <p>Responder a: {{$msj['email']}}</p>
    <p>Mensaje:</p>
    <p>{{$msj['message']}}</p>
</body>
</html>