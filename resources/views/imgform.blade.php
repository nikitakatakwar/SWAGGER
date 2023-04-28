<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Validation in Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
        <div class="container mt-5">
                @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                 @endif
                 <form class="w-px-500 p-3 p-md-3" action="{{ route('img',['id'=>1]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        {{-- <label class="col-sm-3 col-form-label">File</label>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                            </div>
                        </div> --}}
                        <div class="col-sm-9">
                            <strong>App Name:</strong>
                            <input type="text" class="form-control" name="app_name" required="true"/>
                            @error('app_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-9 mt-3">
                            <strong>App Logo:</strong>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" name="app_logo"/>
                            @error('app_logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-sm-9 mt-3">
                            <strong>Favicon:</strong>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" name="favicon"/>
                            @error('favicon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-9 mt-3">
                            <strong>Pdf Logo:</strong>
                            <input type="file" class="form-control"  name="pdf_logo"/>
                            @error('pdf_logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-9 mt-3">
                            <strong>Theme Color:</strong>
                            <select class="selectpicker" name="theme_color">
                                <option value="green">green</option>
                                <option value="orange">orange</option>
                                <option value="blue">blue</option>
                            </select>
                        </div>
                        <div class="col-sm-9 mt-3">
                            <strong>Secondary Color:</strong>
                            <select class="selectpicker" name="secondary_color">
                                <option value="green">green</option>
                                <option value="orange">orange</option>
                                <option value="blue">blue</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-xs-12 col-sm-12 col-md-12 text-center"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-success btn-block text-white">Submit</button>
                        </div>
                    </div>
                </form>
                </form>
         </div>
</body>
</html>
