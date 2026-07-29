@extends('app')
@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                   <div class="mt-4">
                        @foreach ($errors->all() as $error )
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                   </div>
                @endif
                <div class="card mt-5 mb-5">
                    <div class="card-body">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label"></label>Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email address</label>
                                <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"></label>Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"></label>Message</label>
                                <textarea type="text" class="form-control" id="message" name="message"></textarea>
                            </div>
                            <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
