<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial Clínico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        h1, h2 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #2980b9;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Historial Clínico de {{$paciente->nombre_paciente}} {{$paciente->apellido_paciente}}</h2>

    <h2>Información Personal</h2>
    <p><strong>Nombre:</strong> {{$paciente->nombre_paciente}} {{$paciente->apellido_paciente}}</p>
    <p><strong>Edad:</strong> {{\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->age}}</p>
    <p><strong>Género:</strong> @if($paciente->sexo_paciente=="m")Masculino @else Femenino @endif</p>
    <p><strong>Fecha de Nacimiento:</strong> {{\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->format('d-m-Y')}}</p>

    

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