<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    
    public function rules(): array
    {
        return [
            'privacy_policy_url' => ['url'],
            'terms_and_conditions_url' => ['url'],
            'legal_disclaimer_url' => ['url'],
            'knowledge_base_url' => ['url'],
            'faq_url' => ['url'],
            'service_docs_url' => ['url'],
            'service_tutorials_url' => ['url'],
            'product_api_url' =>['url'],
            'api_code_github_repo_url' => ['url'],
            'ask_a_question_url' =>['url'],
            'ssh_key_generation_tutorial_url' =>['url'],
            'coupon_code_terms_and_conditions_url' =>['url'],
            'referral_terms_and_conditions_url' =>['url'],
            'facebook_url' => ['url'],
            'twitter_url' => ['url'],
            'linkedIn_url' => ['url'],
            'object_storage_s3cmd_doc_url' => ['url'],
        ];
    }
}
