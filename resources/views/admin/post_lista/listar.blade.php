

<<h1>Pacientes</h1>

@foreach ($paciente as $pacientes)

    <p>{{ $pacientes->nome_paciente }}</p>
    <p>{{ $pacientes->sexo }}</p>
    <p>{{ $pacientes->n_prontuario }}</p>
    
@endforeach