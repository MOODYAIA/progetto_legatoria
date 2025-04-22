@extends('admin.main-layout')

@section('main')

<div >
    @if(session('success'))
        <div class="alert alert-success" id="session_alert">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger" id="session_alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="container">
            <table id="datatable-generic" class="table table-bordered table-striped table-dark" >
                <thead class="thead-light">
                    <tr>
                        <th><strong>Fase ID</strong></th>
                        <th><strong>Codice Operatore</strong></th>
                        <th><strong>Codice Commessa</strong></th>
                        <th><strong>Codice Macchina</strong></th>
                        <th><strong>Macchina Condivisa</strong></th>
                        <th><strong>Segnatura</strong></th>
                        <th><strong>Segnatura Finita</strong></th>
                        <th><strong>N Colpi Start</strong></th>
                        <th><strong>N Colpi End</strong></th>
                        <th><strong>Timestamp Inizio</strong></th>
                        <th><strong>Timestamp Fine</strong></th>
                    </tr>
                </thead>
                <tbody id="userTable">
                    @foreach($registrazioni_cucitura as $lavorazione)
                    <tr id="row-{{ $lavorazione->id_lc }}">

                        <td>{{ $lavorazione->fase_id }}</td>
                        <td>{{ $lavorazione->codice_operatore }}</td>
                        <td>{{ $lavorazione->codice_commessa }}</td>
                        <td>{{ $lavorazione->codice_macchina }}</td>
                        <td>{{ $lavorazione->macchina_condivisa }}</td>
                        <td>{{ $lavorazione->segnatura }}</td>
                        <td>{{ $lavorazione->segnatura_finita }}</td>
                        <td>{{ $lavorazione->n_colpi_start }}</td>
                        <td>{{ $lavorazione->n_colpi_end }}</td>
                        <td>{{ \Carbon\Carbon::parse($lavorazione->timestamp_inizio)->format('d/m/Y H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($lavorazione->timestamp_fine)->format('d/m/Y H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>


@endsection

@section('scripts_pagine_secondarie')
<script>

</script>
@endsection

