@extends('layouts.admin')
@section('title', 'Vehicle Contacts')

@section('content')
    <h3 class="page-title">Vehicle Contacts</h3>

    <!-- Content -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">List of Client's Messages on Vehicles</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{ route('admin.contact.index') }}" method="GET">
                        <div class="row">
                            <div class="form-group col-sm-8">
                                <input type="text" class="form-control"
                                       name="q" value="{{ $search['q'] ?: '' }}"
                                       placeholder="Search by name, phone, email...">
                            </div>
                            <div class="form-group col-sm-2">
                                <select class="form-control" name="date">
                                    <option value="">--Sort by date--</option>
                                    <option value="1" {{ $search['date']==1 ? 'selected' : '' }}>Date Descending</option>
                                    <option value="2" {{ $search['date']==2 ? 'selected' : '' }}>Date Ascending</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2">
                                <button class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Vehicle</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (count($contacts) > 0)
                            @foreach($contacts as $contact)
                            <tr class="{{ $contact->status == 'unread' ? 'bg-unread' : '' }}">
                                <td><a href="{{ route('admin.contact.show', ['id'=>$contact->id]) }}">{{ $contact->name }}</a></td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($contact->message, 120, ('...')) }}</td>
                                <td><a href="{{ route('admin.vehicles.show', ['id'=>$contact->vehicle->slug]) }}" target="_blank">{{ $contact->vehicle->name }}</a></td>
                                <td>{{ date('j/m/y, g:i A', strtotime($contact->created_at)) }}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">No Messages</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    {{ $contacts->appends(['q'=>$search['q'], 'date'=>$search['date']])->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection