@extends('admin.layouts.master')
@section('title', 'contact')
@section('content')
<div class="container mt-5">
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">Contact Inquiries</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Schedule</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>

            @forelse($contacts as $contact)
            <tr onclick="window.location='{{ route('admin.contact-detail', $contact->id) }}'" style="cursor:pointer;">
                <td>{{$loop->iteration}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->number}}</td>
                <td>{{date('d-M-Y h:i:s A',strtotime($contact->time))}}</td>
                <td>{{$contact->status}}</td>
            </tr>
            @empty
                <tr> <td colspan="8" class="text-center"> No data found</td> </tr>
            @endforelse
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
</div>
<!-- /.card -->

@endsection