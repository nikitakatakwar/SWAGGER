<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Img Update Request",
 *      description="Update Img request body",
 *      type="object",
 *      required={"app_name", "app_logo", "pdf_logo","theme_color","favicon","secondary_color"}
 * )
 */
class UpdateImgRequest
{

    /**
     * @OA\Property(
     *      title="app_name",
     *      description="app_name",
     *      example="Console Infotech"
     * )
     *
     * @var string
     */
    public $app_name;

    /**
     * @OA\Property(
     *      title="theme_color",
     *      description="theme_color",
     *      example="Blue"
     * )
     *
     * @var string
     */
    public $theme_color;



    /**
     * @OA\Property(
     *      title="secondary_color",
     *      description="secondary_color",
     *      example="Black"
     * )
     *
     * @var string
     */

    public $secondary_color;

    /**
     * @OA\Property(description="App logo Image", type="file", format="file")
     */
    public $app_logo;
    /**
     * @OA\Property(description="Pdf Logo Image", type="file", format="file")
     */
    public $pdf_logo;

    /**
     * @OA\Property(description="Favicon Logo Image", type="file", format="file")
     */
    public $favicon;

}
