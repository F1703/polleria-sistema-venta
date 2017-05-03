@extends('layouts.app')

@section('contentheader_title')
    {{-- <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Emails --}}
            <a class="btn btn-success pull-left" href="{{ route('emails.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        {{-- </h1>

    </div> --}}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            @if($emails->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($emails as $email)
                            <tr>
                                <td>{{$email->id}}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('emails.show', $email->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('emails.edit', $email->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('emails.destroy', $email->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $emails->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
