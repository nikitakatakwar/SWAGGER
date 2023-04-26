<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Column;
use App\Models\User;

class UserController extends Controller
{
    public function store()
    {
        $key="app_name";
        $value="console";
        $data = Column::where('key', $key)->update(['value'=>'console']);
    }

      /**
     * @OA\Put(
     *     path="/url",
     *     operationId="brandurl",
     *     tags={"Settings"},
     *     summary="Update BrandSettings url in DB",
     *     description="Update BrandSettings url in DB",
     *     @OA\Parameter(name="id", in="path", description="Id of BrandSettings", required=false,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"privacy_policy_url", "terms_and_conditions_url", "legal_disclaimer_url","knowledge_base_url","faq_url","service_docs_url","service_tutorials_url","product_api_url","api_code_github_repo_url","ask_a_question_url","ssh_key_generation_tutorial_url","coupon_code_terms_and_conditions_url","referral_terms_and_conditions_url","facebook_url","twitter_url","linkedIn_url","object_storage_s3cmd_doc_url"},
     *           @OA\Property(property="privacy_policy_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="terms_and_conditions_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="legal_disclaimer_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="knowledge_base_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="faq_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="service_docs_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="service_tutorials_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="product_api_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="api_code_github_repo_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="ask_a_question_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="ssh_key_generation_tutorial_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="coupon_code_terms_and_conditions_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="referral_terms_and_conditions_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="facebook_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="twitter_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="linkedIn_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *           @OA\Property(property="object_storage_s3cmd_doc_url", type="string", format="string", example="http://test/phpmyadmin/"),
     *        ),
     *     ),
     *     @OA\Response(
     *          response=200, description="Success",
     *          @OA\JsonContent(
     *             @OA\Property(property="status_code", type="integer", example="200"),
     *             @OA\Property(property="data",type="object")
     *          )
     *       )
     *  )
     */
    public function brandurl(Request $request)
    {
        $request->validate([
            'privacy_policy_url' => 'url',
            'terms_and_conditions_url' => 'url',
            'legal_disclaimer_url' => 'url',
            'knowledge_base_url' => 'url',
            'faq_url' => 'url',
            'service_docs_url' => 'url',
            'service_tutorials_url' => 'url',
            'product_api_url' => 'url',
            'api_code_github_repo_url' => 'url',
            'ask_a_question_url' => 'url',
            'ssh_key_generation_tutorial_url' => 'url',
            'coupon_code_terms_and_conditions_url' => 'url',
            'referral_terms_and_conditions_url' => 'url',
            'facebook_url' => 'url',
            'twitter_url' => 'url',
            'linkedIn_url' => 'url',
            'object_storage_s3cmd_doc_url' => 'url',
        ]);


        Column::where('key', 'privacy_policy_url')->update(['value'=>$request->privacy_policy_url]);
        Column::where('key', 'terms_and_conditions_url')->update(['value'=>$request->terms_and_conditions_url]);
        Column::where('key', 'legal_disclaimer_url')->update(['value'=>$request->legal_disclaimer_url]);
        Column::where('key', 'knowledge_base_url')->update(['value'=>$request->knowledge_base_url]);
        Column::where('key', 'faq_url')->update(['value'=>$request->faq_url]);
        Column::where('key', 'service_docs_url')->update(['value'=>$request->service_docs_url]);
        Column::where('key', 'service_tutorials_url')->update(['value'=>$request->service_tutorials_url]);
        Column::where('key', 'product_api_url')->update(['value'=>$request->product_api_url]);
        Column::where('key', 'api_code_github_repo_url')->update(['value'=>$request->api_code_github_repo_url]);
        Column::where('key', 'ask_a_question_url')->update(['value'=>$request->ask_a_question_url]);
        Column::where('key', 'ssh_key_generation_tutorial_url')->update(['value'=>$request->ssh_key_generation_tutorial_url]);
        Column::where('key', 'coupon_code_terms_and_conditions_url')->update(['value'=>$request->coupon_code_terms_and_conditions_url]);
        Column::where('key', 'referral_terms_and_conditions_url')->update(['value'=>$request->referral_terms_and_conditions_url]);
        Column::where('key', 'facebook_url')->update(['value'=>$request->facebook_url]);
        Column::where('key', 'twitter_url')->update(['value'=>$request->twitter_url]);
        Column::where('key', 'linkedIn_url')->update(['value'=>$request->linkedIn_url]);
        Column::where('key', 'object_storage_s3cmd_doc_url')->update(['value'=>$request->object_storage_s3cmd_doc_url]);

   }

}
