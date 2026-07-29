@extends('app')
@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="mt-4">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <div class="card mt-5 mb-5">
                    <div class="card-body">
                        <form method="POST" action="{{ route('file.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label"></label>Name</label>
                                <input type="file" class="form-control mt-2" id="file" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            <table>
                <tbody>
                    @foreach ( $files as $file)
                        <td><img style="width: 100px; hight:100px" src="{{ asset($file->file_path) }}" alt="thumnail"></td>
                    @endforeach
                </tbody>
            </table>
            <hr class="mt-2 mb-2">
             <table>
                <tbody>
                   <td>
                    <a href="{{ route('file.download') }}">Download File</a>
                   </td>
                </tbody>
            </table>
            </div>

        </div>
    </section>
@endsection
