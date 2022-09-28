@extends('base')
@extends('navbar')
@section('title', 'Logs')
@section('content')
<div class="container">
    <table class="table table-striped table-sm">
        <h1>Activity Log</h1>
        <thead>
            <tr>
                <th>Timestamp</th>
                <th>Log Entry</th>
            </tr>
        </thead>
        @foreach($logs as $log)
            <tr>
                <th>{{ $log->created_at }}</th>
                <th>{{ $log->log_entry }}</th>
            </tr>
        @endforeach
    </table>
</div>
@endsection