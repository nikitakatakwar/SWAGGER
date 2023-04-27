<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Url Update Request",
 *      description="Update Url request body",
 *      type="object",
 *      required={"terms_and_conditions_url", "privacy_policy_url", "legal_disclaimer_url","knowledge_base_url","faq_url","service_docs_url","service_tutorials_url","product_api_url","api_code_github_repo_url","ask_a_question_url","ssh_key_generation_tutorial_url","coupon_code_terms_and_conditions_url","referral_terms_and_conditions_url","facebook_url","twitter_url","linkedIn_url","object_storage_s3cmd_doc_url"}
 * )
 */
class UpdateUrlRequest
{

    /**
     * @OA\Property(
     *      title="terms_and_conditions_url",
     *      description="terms_and_conditions_url name",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $terms_and_conditions_url;


    /**
     * @OA\Property(
     *      title="privacy_policy_url",
     *      description="privacy_policy_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */

    public $privacy_policy_url;

    /**
     * @OA\Property(
     *      title="legal_disclaimer_url",
     *      description="legal_disclaimer_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $legal_disclaimer_url;

    /**
     * @OA\Property(
     *      title="knowledge_base_url",
     *      description="knowledge_base_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $knowledge_base_url;

    /**
     * @OA\Property(
     *      title="faq_url",
     *      description="faq_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $faq_url;

    /**
     * @OA\Property(
     *      title="service_docs_url",
     *      description="service_docs_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $service_docs_url;

    /**
     * @OA\Property(
     *      title="service_tutorials_url",
     *      description="service_tutorials_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $service_tutorials_url;

    /**
     * @OA\Property(
     *      title="product_api_url",
     *      description="product_api_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $product_api_url;

    /**
     * @OA\Property(
     *      title="api_code_github_repo_url",
     *      description="api_code_github_repo_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $api_code_github_repo_url;


    /**
     * @OA\Property(
     *      title="ask_a_question_url",
     *      description="ask_a_question_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $ask_a_question_url;

    /**
     * @OA\Property(
     *      title="ssh_key_generation_tutorial_url",
     *      description="ssh_key_generation_tutorial_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $ssh_key_generation_tutorial_url;


    /**
     * @OA\Property(
     *      title="coupon_code_terms_and_conditions_url",
     *      description="coupon_code_terms_and_conditions_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $coupon_code_terms_and_conditions_url;


    /**
     * @OA\Property(
     *      title="referral_terms_and_conditions_url",
     *      description="referral_terms_and_conditions_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $referral_terms_and_conditions_url;


    /**
     * @OA\Property(
     *      title="facebook_url",
     *      description="facebook_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $facebook_url;

    /**
     * @OA\Property(
     *      title="twitter_url",
     *      description="twitter_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $twitter_url;

      /**
     * @OA\Property(
     *      title="linkedIn_url",
     *      description="linkedIn_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $linkedIn_url;

    /**
     * @OA\Property(
     *      title="object_storage_s3cmd_doc_url",
     *      description="object_storage_s3cmd_doc_url",
     *      example="http://127.0.0.1:8000/api/"
     * )
     *
     * @var string
     */
    public $object_storage_s3cmd_doc_url;
}
