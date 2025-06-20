@extends('admin.layouts.master')
@section('title', 'contact')
@section('content')
<div class="wrapper mt-3">
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0 text-dark">Inquiry Details</h1>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Contact Inquiry</h3>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9">{{$contact->name}}</dd>

                            <dt class="col-sm-3">Mobile No</dt>
                            <dd class="col-sm-9">{{$contact->number}}</dd>

                            <dt class="col-sm-3">Email</dt>
                            <dd class="col-sm-9">{{$contact->email}}</dd>

                            <dt class="col-sm-3">Schedule</dt>
                            <dd class="col-sm-9">{{date('d-M-Y h:i:s A',strtotime($contact->time))}}</dd>

                            <dt class="col-sm-3">Subject</dt>
                            <dd class="col-sm-9">{{$contact->sub}}</dd>

                            <dt class="col-sm-3">Message</dt>
                            <dd class="col-sm-9">{{$contact->message}}</dd>

                            <dt class="col-sm-3">Status</dt>
                            <dd class="col-sm-9" id="status">{{$contact->status}}</dd>
                        </dl>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                        <div class="btn btn-primary" id="reply">Reply</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@push('script')
<script>
$(document).ready(() => {
    $('#reply').on('click', function () {
        $.ajax({
            url: "{{ route('admin.contact_status', $contact->id) }}",
            type: 'GET',
            success: (response) => {
                console.log(response);
                if (response.success) {
                    $('#status').html(response.status);
                }
            },
            error: (error) => {
                console.log(error);
            }
        });
    });
});
</script>
@endpush
@endsection