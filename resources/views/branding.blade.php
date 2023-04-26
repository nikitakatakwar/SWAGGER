<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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

body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
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
    {{-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalLoginForm">
        Launch demo modal
    </button>

    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalLoginForm2">
        External Link
    </button> --}}
  </div>

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
                        <form method="post" action="{{ route('url.store',['id'=>1]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            <div class="form-group">
                                @csrf
                                <label for="name">Privacy Policy URL</label>
                                <input type="text" id="homepage" name="privacy_policy_url">
                            </div>
                            <div class="form-group">
                                <label for="logo">Terms & Conditions URL</label>
                                <input type="text" id="homepage" name="terms_and_conditions_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Legal Disclaimer URL</label>
                                <input type="text" id="homepage" name="legal_disclaimer_url">
                            </div>

                            <div class="form-group">
                                <label for="favicon">FAQ's URL</label>
                                <input type="text" id="homepage" name="faq_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Knowledge Base URL</label>
                                <input type="text" id="homepage" name="knowledge_base_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Service Docs URL</label>
                                <input type="text" id="homepage" name="service_docs_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Service Tutorials URL</label>
                                <input type="text" id="homepage" name="service_tutorials_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Product API URL</label>
                                <input type="text" id="homepage" name="product_api_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">API Code Github Repo URL</label>
                                <input type="text" id="homepage" name="api_code_github_repo_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Ask a question URL</label>
                                <input type="text" id="homepage" name="ask_a_question_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">SSH Key Generation Tutorial URL</label>
                                <input type="text" id="homepage" name="ssh_key_generation_tutorial_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Coupon Code Terms & Conditions URL</label>
                                <input type="text" id="homepage" name="coupon_code_terms_and_conditions_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Referral Terms & Conditions URL</label>
                                <input type="text" id="homepage" name="referral_terms_and_conditions_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Facebook URL</label>
                                <input type="text"  name="facebook_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Twitter URL</label>
                                <input type="text" name="twitter_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">LinkedIn URL</label>
                                <input type="text" id="homepage" name="linkedIn_url">
                            </div>
                            <div class="form-group">
                                <label for="favicon">Object Storage s3cmd Doc URL</label>
                                <input type="text" id="homepage" name="object_storage_s3cmd_doc_url">
                            </div>
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
{{--

                    <form method="post" action="{{ route('url.store') }}" enctype="multipart/form-data">>
                        <div class="form-group">
                            @csrf
                            <label for="name">Privacy Policy URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="logo">Terms & Conditions URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Legal Disclaimer URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">FAQ's URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Service Docs URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Service Tutorials URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Product API URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">API Code Github Repo URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Ask a question URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">SSH Key Generation Tutorial URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Referral Terms & Conditions URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Facebook URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Twitter URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">LinkedIn URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <div class="form-group">
                            <label for="favicon">Object Storage s3cmd Doc URL</label>
                            <input type="url" id="homepage" name="homepage">
                        </div>
                        <button type="submit" class="btn btn-block btn-danger mb-5">Save</button>
                    </form> --}}

                    <form class="w-px-500 p-3 p-md-3" action="{{ route('brand.store',['id'=>1]) }}" method="post" enctype="multipart/form-data">
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
