<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandSettings;
use App\Models\Column;

class BrandController extends Controller
{

       /**
     * @OA\Get(
     *      path="/index",
     *      operationId="getBrandSettingList",
     *      tags={"BrandSetting"},
     *      summary="Get list of brandSettings",
     *      description="Returns list of brandSettings",
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index()
    {
        return BrandSettings::all();
    }

       /**
     * @OA\Post(
     *      path="/brandSave/{id}",
     *      operationId="store",
     *      tags={"BrandSetting"},
     *      summary="Update existing BrandSetting",
     *      description="Returns updated BrandSetting data",
     *      @OA\Parameter(
     *          name="id",
     *          description="BrandSettings id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateBrandSettingRequest"),
     *          @OA\Property(property="app_name", type="string", format="string", example="Test"),
     *          @OA\Property(property="theme_color", type="string", format="string", example="Blue"),
     *          @OA\Property(property="secondary_color", type="string", format="string", example="Red"),
     *          @OA\MediaType(
     *               mediaType="multipart/form-data",
     *                   @OA\Schema(
     *                  	@OA\Property(
     *                     	property="pdf_logo",
     *                     	type="file",
     *                     	format="file"
     *                 			),
     *                      @OA\Property(
     *                     	property="app_logo",
     *                     	type="file",
     *                     	format="file"
     *                 			),
     *                      @OA\Property(
     *                     	property="favicon",
     *                     	type="file",
     *                     	format="file"
     *                 			),
     *             			)
     *         		   ),
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function store(Request $request,$id)
    {
        // $request->validate([
        //     'app_name' => 'required',
        // ]);

        $appLogo ="";
        $pdfLogo="";
        $faviconLogo="";
        $input = $request->all();

        if ($app_logo = $request->file('app_logo')) {
            $destinationPath = 'images/';
            $appLogo = date('YmdHis') . "." . $app_logo->getClientOriginalExtension();
            $app_logo->move($destinationPath, $appLogo);
            $input['app_logo'] = "$appLogo";
        }else{
            unset($app_logo['app_logo']);
        }

       if ($pdf_logo = $request->file('pdf_logo')) {
            $destinationPath = 'images/';
            $pdfLogo = date('YmdHis') . "." . $pdf_logo->getClientOriginalExtension();
            $pdf_logo->move($destinationPath, $pdfLogo);
            $input['pdf_logo'] = "$pdfLogo";
        }else{
            unset($pdf_logo['pdf_logo']);
        }

        if ($favicon_logo = $request->file('favicon')) {
            $destinationPath = 'images/';
            $faviconLogo = date('YmdHis') . "." . $pdf_logo->getClientOriginalExtension();
            $favicon_logo->move($destinationPath, $faviconLogo);
            $input['pdf_logo'] = "$faviconLogo";
        }else{
            unset($favicon_logo['favicon']);
        }

        $brandSetting = BrandSettings::find($id);
        $brandSetting->app_name=$request->app_name;
        $brandSetting->app_logo=$appLogo;
        $brandSetting->pdf_logo=$pdfLogo;
        $brandSetting->theme_color=$request->theme_color;
        $brandSetting->secondary_color=$request->secondary_color;
        $brandSetting->favicon=$faviconLogo;
        $brandSetting->save();


    }


    /**
     * @OA\Put(
     *     path="/url-save/{id}",
     *     operationId="urlstore",
     *     tags={"BrandSettingsUrl"},
     *     summary="Update BrandSettings url in DB",
     *     description="Update BrandSettings url in DB",
     *     @OA\Parameter(name="id", in="path", description="Id of BrandSettings", required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"privacy_policy_url", "terms_and_conditions_url", "legal_disclaimer_url","knowledge_base_url","faq_url","service_docs_url","service_tutorials_url","product_api_url","api_code_github_repo_url","ask_a_question_url","ssh_key_generation_tutorial_url","coupon_code_terms_and_conditions_url","referral_terms_and_conditions_url","facebook_url","twitter_url","object_storage_s3cmd_doc_url"},
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

    public function urlstore(Request $request ,$id)
    {

        // dd($request);
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
            'object_storage_s3cmd_doc_url' => 'url',
        ]);

        $brandSetting = BrandSettings::find($id);
        $brandSetting->privacy_policy_url = $request->privacy_policy_url;
        $brandSetting->terms_and_conditions_url = $request->terms_and_conditions_url;
        $brandSetting->legal_disclaimer_url =$request->legal_disclaimer_url;
        $brandSetting->knowledge_base_url = $request->knowledge_base_url;
        $brandSetting->faq_url=$request->faq_url;
        $brandSetting->service_docs_url=$request->service_docs_url;
        $brandSetting->service_tutorials_url=$request->service_tutorials_url;
        $brandSetting->product_api_url=$request->product_api_url;
        $brandSetting->api_code_github_repo_url=$request->api_code_github_repo_url;
        $brandSetting->ask_a_question_url=$request->ask_a_question_url;
        $brandSetting->ssh_key_generation_tutorial_url=$request->ssh_key_generation_tutorial_url;
        $brandSetting->coupon_code_terms_and_conditions_url=$request->coupon_code_terms_and_conditions_url;
        $brandSetting->referral_terms_and_conditions_url=$request->referral_terms_and_conditions_url;
        $brandSetting->facebook_url=$request->facebook_url;
        $brandSetting->twitter_url=$request->twitter_url;
        $brandSetting->object_storage_s3cmd_doc_url=$request->object_storage_s3cmd_doc_url;
        $brandSetting->save();

   }

   public function create()
   {

    $column = [

       'key'=> [
            '0'=>"app_name",
            '1'=>'app_logo',
            '2'=>'favicon',
            '3'=>'pdf_logo',
            '4'=>'theme_color',
            '5'=>'secondary_color',
            '6'=>"privacy_policy_url",
            '7'=>'terms_and_conditions_url',
            '8'=>'legal_disclaimer_url',
            '9'=>'knowledge_base_url',
            '10'=>'faq_url',
            '11'=>'service_docs_url',
            '12'=>'service_tutorials_url',
            '13'=>'product_api_url',
            '14'=>'api_code_github_repo_url',
            '15'=>'ask_a_question_url',
            '16'=>'ssh_key_generation_tutorial_url',
            '17'=>'coupon_code_terms_and_conditions_url',
            '18'=>'referral_terms_and_conditions_url',
            '19'=>'facebook_url',
            '20'=>'twitter_url',
            '21'=>'linkedIn_url',
            '22'=>'object_storage_s3cmd_doc_url',
        ],
       'value'=>"",
    ];

    foreach(  $column['key']  as  $data)
    {
         Column::insert([
            'key'=> $data,
            'value'=> "",
        ]);
    }
}
}
