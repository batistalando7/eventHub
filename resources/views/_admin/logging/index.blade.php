@extends('layouts._admin.main')

@section('title', 'Auditorias de Atividades')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Atividades dos Utilizadores</h4>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Utilizador</th>
                    <th>Rota</th>
                    <th>Ação</th>
                    <th>Descrição</th>
                    <th>IP</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr>
                    <td>{{ $log->user->name ?? 'Visitante' }}</td>
                    <td>{{ $log->route }}</td>
                    <td>{{ $log->action }}</td>
                    <td>{{ $log->description }}</td>
                    <td>{{ $log->ip_address }}</td>
                    <td>{{ $log->created_at->setTimezone('Africa/Luanda')->format('d/m/Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $logs->links() }}
    </div>
</div>
@endsection
