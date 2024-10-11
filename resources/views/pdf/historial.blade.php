<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial Clínico</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        h1, h2 {
            color: #2c3e50;
        }
        /* Estilos básicos para la tabla */
        table {
            width: 100%;
            border-collapse: separate; /* Permite bordes redondeados */
            border-spacing: 0; /* Elimina el espacio entre celdas */
            margin-bottom: 20px;
            font-family: Verdana, sans-serif;
            border-radius: 10px; /* Bordes redondeados */
            overflow: hidden; /* Asegura que los bordes redondeados afecten todo */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        /* Estilo para las celdas */
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd; /* Línea sutil entre filas */
        }

        /* Color de fondo de los encabezados */
        th {
            background-color: #30abc6;
            color: white;
            border-bottom: 2px solid #388E3C; /* Bordes más gruesos para encabezados */
        }

        /* Estilos de las celdas redondeadas en la parte superior e inferior */
        table tr:first-child th:first-child {
            border-top-left-radius: 10px;
        }

        table tr:first-child th:last-child {
            border-top-right-radius: 10px;
        }

        table tr:last-child td:first-child {
            border-bottom-left-radius: 10px;
        }

        table tr:last-child td:last-child {
            border-bottom-right-radius: 10px;
        }

        /* Colores alternos para las filas */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Efecto hover sobre las filas */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Estilo para enlaces dentro de la tabla */
        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
		
		/* Estilo básico para la tarjeta */
        .card {
            
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            overflow: hidden; /* Asegura que los bordes redondeados contengan el contenido */
            background-color: white; /* Fondo blanco */
            font-family: Arial, sans-serif; /* Fuente */
            transition: transform 0.2s; /* Efecto de transición al hacer hover */
        }

        /* Estilo para la imagen en la tarjeta */
        .card img {
            width: 100%;
            height: auto;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        /* Estilo para el contenido de la tarjeta */
        .card-body {
            padding: 20px;
        }

        /* Estilo para el título */
        .card-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        /* Estilo para el texto */
        .card-text {
            font-size: 1em;
            color: #555;
            line-height: 1.5;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <h2>Historial Clínico de {{$paciente->nombre_paciente}} {{$paciente->apellido_paciente}}</h2>
	<div class="card">
	<div class="card-body">
           <h2>Generales del paciente</h2>
			<p><strong>Nombre:</strong> {{$paciente->nombre_paciente}} {{$paciente->apellido_paciente}}</p>
			<p><strong>Edad:</strong> {{\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->age}}</p>
			<p><strong>Género:</strong> @if($paciente->sexo_paciente=="m")Masculino @else Femenino @endif</p>
			<p><strong>Fecha de Nacimiento:</strong> {{\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->format('d-m-Y')}}</p>
        </div>
		</div>
			

    

    <h2>Consultas Recientes</h2>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Medico</th>
                <th>Historia Clinica</th>
                <th>Diagnóstico</th>
                <th>Tratamiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paciente->consultas as $consulta)
                <tr>
                    <td>{{\Carbon\Carbon::parse($consulta->fecha_consulta)->format('d-m-Y')}}</td>
                    <td>{{$consulta->nombre_medico}}</td>
                    <td>{{$consulta->historia_clinica}}</td>
                    <td>{{$consulta->diagnostico}}</td>
                    <td>{{$consulta->recomendaciones}}</td>
                </tr>
            @endforeach
           
           
        </tbody>
    </table> 

</body>
</html>