<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Column;
use App\Models\User;
use App\Http\Requests\StoreUrlRequest;
use App\Http\Requests\StorePostRequest;
use App\Models\BrandSettings;

class UserController extends Controller
{
    public function urlform()
    {
       return view('urlform');
    }

    public function Imgform()
    {
       return view('imgform');
    }
    public function store()
    {
        $key="app_name";
        $value="console";
        $data = Column::where('key', $key)->update(['value'=>'console']);
    }

      /**
     * @OA\Put(
     *      path="/url",
     *      operationId="brandurl",
     *      tags={"Settings"},
     *      summary="Update existing brand setting url",
     *      description="Returns updated brand setting url data",
     *      @OA\Parameter(
     *          name="terms_and_conditions_url",
     *          description="Column id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateUrlRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Success"
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
    public function brandurl(StorePostRequest $request)
    {
        $validated = $request->validated();


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

        return ["result"=>"data is updated"];

   }

    /**
     * @OA\Post(
     *      path="/img",
     *      operationId="brandImage",
     *      tags={"Settings"},
     *      summary="Update existing brand setting img",
     *      description="Returns updated brand setting img data",
     *      @OA\Parameter(
     *          name="id",
     *          description="BrandSettings id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     * @OA\RequestBody(
     *   required=true,
     *   description="Bulk products Body",
     *   @OA\JsonContent(ref="#/components/schemas/UpdateImgRequest"),
     *   @OA\MediaType(
     *     mediaType="multipart/form-data",
     *     @OA\Schema(ref="#/components/schemas/UpdateImgRequest")
     *   ),
     * ),
     *      @OA\Response(
     *          response=200,
     *          description="Success"
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

   public function brandImage(Request $request,$id)
   {

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
       return ["result"=>"data is updated"];


   }


}
