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
                    <input type="text" class="form-control"  name="facebook_url">
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
</body>
</html>
