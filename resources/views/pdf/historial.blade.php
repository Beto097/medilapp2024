<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Historial Clínico</title>
    <style>

        body {
            font-family: 'Rubik', sans-serif;
            margin: 20px;
        }
        h1, h2, h3 {
            color: #2c3e50;
			text-align: center; /* Centrar el texto */
        }
        /* Estilos básicos para la tabla */
        table {
            width: 100%;
            border-collapse: separate; /* Permite bordes redondeados */
            border-spacing: 0; /* Elimina el espacio entre celdas */
            margin-bottom: 20px;
            font-family: 'Rubik', sans-serif;
            border-radius: 10px; /* Bordes redondeados */
            overflow: hidden; /* Asegura que los bordes redondeados afecten todo */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        /* Estilo para las celdas */
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ffff; /* Línea sutil entre filas */
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
		
		
		
		hr {
            border: none; /* Elimina el borde por defecto */
            height: 2px; /* Grosor de la línea */
            background-color: #333; /* Color de la línea */
            margin: 20px 0; /* Espaciado arriba y abajo */
        }
    </style>
</head>
<body>

        
        <h1 ><strong>Historial Clínico</strong></h1>
	<h2 >Zuara Salud</h2>
   
			
	<table>
        <thead>
            <tr>
                <th>GENERALES DEL PACIENTE</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><strong>Nombre:</strong> {{$paciente->nombre_paciente}} {{$paciente->apellido_paciente}}</td>
					
				</tr>
				<tr>
					<td><strong>Edad:</strong> {{\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->age}}</td>
				</tr>
				<tr>
					<td><strong>Género:</strong> @if($paciente->sexo_paciente=="m")Masculino @else Femenino @endif</td>
				</tr>
				<tr>
					<td><strong>Fecha de Nacimiento:</strong> {{\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->format('d-m-Y')}}</td>
				</tr>
        </tbody>
    </table> 
    

    <h3>Consultas Recientes</h3>
	@foreach($paciente->consultas as $consulta)
	<hr>
    <table>
	
        <thead>
            <tr>
                <th>Fecha: {{\Carbon\Carbon::parse($consulta->fecha_consulta)->format('d-m-Y')}} </th>
                
            </tr>
        </thead>
        <tbody>
            
                <tr>
							<tr>
								<td><strong>Médico: </strong>{{$consulta->nombre_medico}}</td>
								
							</tr>
							<tr>
								<td><strong>Historia Clinica:</strong> <br>{{$consulta->historia_clinica}}</td>
								
							</tr>
							<tr>
								<td><strong>Diagnóstico:</strong> <br>{{$consulta->diagnostico}}</td>
							</tr>
							<tr>
								<td><strong>Rx:</strong> <br>{{$consulta->laboratorios_examenes}}</td>
							</tr>
							<tr>
								<td><strong>Tratamiento:</strong> <br>{{$consulta->recomendaciones}}</td>
							</tr>
					
                    
                    
                </tr>
            
           
           
        </tbody>
    </table> 
@endforeach
</body>
</html>