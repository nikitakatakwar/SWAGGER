<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
        <style>

        </style>
</head>
<body>

    <div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="container">
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#" data-toggle="modal" data-target="#ModalLoginForm">External Links</a>
        <a href="#" data-toggle="modal" data-target="#ModalLoginForm2">Logo & Content</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    <h2>Animated Sidenav Example</h2>
    <p>Click on the element below to open the side navigation menu.</p>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    <!-- Modal HTML Markup -->
            <div id="ModalLoginForm" class="modal fade mt-5" style="">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title">External resources links settings</h1>
                        </div>
                        <div class="modal-body">
                            {{-- <form method="post" action="{{ route('url.store',['id'=>1]) }}" enctype="multipart/form-data"> --}}
                            <form method="post" action="{{ url('url') }}" enctype="multipart/form-data">
                                @method('PUT')

                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                                @endif

                                <div class="form-group">
                                    @csrf
                                    <label for="name">Privacy Policy URL</label>
                                    <input type="text" class="form-control" name="privacy_policy_url">
                                </div>
                                @error('privacy_policy_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                <div class="form-group">
                                    <label for="logo">Terms & Conditions URL</label>
                                    <input type="text" class="form-control" name="terms_and_conditions_url">
                                </div>
                                @if ($errors->has('terms_and_conditions_url'))
                                <span class="text-danger">{{ $errors->first('terms_and_conditions_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Legal Disclaimer URL</label>
                                    <input type="text" class="form-control" name="legal_disclaimer_url">
                                </div>
                                @if ($errors->has('legal_disclaimer_url'))
                                <span class="text-danger">{{ $errors->first('legal_disclaimer_url') }}</span>
                                @endif

                                <div class="form-group">
                                    <label for="favicon">FAQ's URL</label>
                                    <input type="text" class="form-control" name="faq_url">
                                </div>
                                @if ($errors->has('faq_url'))
                                <span class="text-danger">{{ $errors->first('faq_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Knowledge Base URL</label>
                                    <input type="text" class="form-control" name="knowledge_base_url">
                                </div>
                                @if ($errors->has('knowledge_base_url'))
                                <span class="text-danger">{{ $errors->first('knowledge_base_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Service Docs URL</label>
                                    <input type="text" class="form-control" name="service_docs_url">
                                </div>
                                @if ($errors->has('service_docs_url'))
                                <span class="text-danger">{{ $errors->first('service_docs_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Service Tutorials URL</label>
                                    <input type="text" class="form-control" name="service_tutorials_url">
                                </div>
                                @if ($errors->has('service_tutorials_url'))
                                <span class="text-danger">{{ $errors->first('service_tutorials_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Product API URL</label>
                                    <input type="text" class="form-control" name="product_api_url">
                                </div>
                                @if ($errors->has('product_api_url'))
                                <span class="text-danger">{{ $errors->first('product_api_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">API Code Github Repo URL</label>
                                    <input type="text" class="form-control" name="api_code_github_repo_url">
                                </div>
                                @if ($errors->has('api_code_github_repo_url'))
                                <span class="text-danger">{{ $errors->first('api_code_github_repo_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Ask a question URL</label>
                                    <input type="text" class="form-control" name="ask_a_question_url">
                                </div>
                                @if ($errors->has('ask_a_question_url'))
                                <span class="text-danger">{{ $errors->first('ask_a_question_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">SSH Key Generation Tutorial URL</label>
                                    <input type="text" class="form-control" name="ssh_key_generation_tutorial_url">
                                </div>
                                @if ($errors->has('ssh_key_generation_tutorial_url'))
                                <span class="text-danger">{{ $errors->first('ssh_key_generation_tutorial_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Coupon Code Terms & Conditions URL</label>
                                    <input type="text" class="form-control" name="coupon_code_terms_and_conditions_url">
                                </div>
                                @if ($errors->has('coupon_code_terms_and_conditions_url'))
                                <span class="text-danger">{{ $errors->first('coupon_code_terms_and_conditions_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Referral Terms & Conditions URL</label>
                                    <input type="text" class="form-control" name="referral_terms_and_conditions_url">
                                </div>
                                @if ($errors->has('referral_terms_and_conditions_url'))
                                <span class="text-danger">{{ $errors->first('referral_terms_and_conditions_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Facebook URL</label>
                                    <input type="text" class="form-control" name="facebook_url">
                                </div>
                                @if ($errors->has('facebook_url'))
                                <span class="text-danger">{{ $errors->first('facebook_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Twitter URL</label>
                                    <input type="text" class="form-control" name="twitter_url">
                                </div>
                                @if ($errors->has('twitter_url'))
                                <span class="text-danger">{{ $errors->first('twitter_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">LinkedIn URL</label>
                                    <input type="text" class="form-control" name="linkedIn_url">
                                </div>
                                @if ($errors->has('linkedIn_url'))
                                <span class="text-danger">{{ $errors->first('linkedIn_url') }}</span>
                                @endif
                                <div class="form-group">
                                    <label for="favicon">Object Storage s3cmd Doc URL</label>
                                    <input type="text" class="form-control" name="object_storage_s3cmd_doc_url">
                                </div>
                                @if ($errors->has('object_storage_s3cmd_doc_url'))
                                <span class="text-danger">{{ $errors->first('object_storage_s3cmd_doc_url') }}</span>
                                @endif
                                <button type="submit" class="btn btn-block btn-danger mb-5">Save</button>
                        </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
    <!-- /.modal -->

        <!-- Modal HTML Markup -->
        <div id="ModalLoginForm2" class="modal fade mt-5 ml-5 mb-5" style="">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Logo & Content Settings</h1>
                    </div>
                    <div class="modal-body">


                        <form class="w-px-500 p-3 p-md-3" action="" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('PUT') --}}
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
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    <!-- /.modal -->
    </div>
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>
