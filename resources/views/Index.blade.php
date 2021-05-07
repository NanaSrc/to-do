@extends('layout')
@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>To dos</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('to_dos.create') }}">Novo</a>

            </div>

        </div>

    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered">

        <tr>

            <th>Título</th>

            <th>Subtítulo</th>

            <th>Check</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($to_dos as $to_do)

            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $to_do->Titulo }}</td>

                <td>{{ $to_do->Subtitulo }}</td>

                <td>{{ $to_do->Check }}</td>

                <td>

                    <form action="{{ route('to_dos.destroy', $to_do->Tarefa_ID) }}" method="POST">

                        <a class="btn btn-link" href="{{ route('to_dos.show', $to_do->Tarefa_ID) }}">Detalhes</a>

                        <a class="btn btn-link" href="{{ route('to_dos.edit', $to_do->Tarefa_ID) }}">Editar</a>

                        @csrf
                        <!--PROTECÇAÕ contra Cross-site (malicious exploit)-->

                        @method('DELETE')

                        <button type="submit" class="btn btn-link text-danger">Deletar</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>

    {!! $to_dos->links() !!}

@endsection
