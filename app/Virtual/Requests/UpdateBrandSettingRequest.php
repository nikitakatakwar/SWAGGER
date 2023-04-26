<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Profile Update Request",
 *      description="Update User Profile request body",
 *      type="object",
 *      required={"app_name", "theme_color", "secondary_color"},
 * )
 */
class UpdateBrandSettingRequest
{

    /**
     * @OA\Property(
     *      title="app_name",
     *      description="App name",
     *      example="StackConsole2.0-Laravel"
     * )
     *
     * @var string
     */
    public $app_name;


    /**
     * @OA\Property(
     *      title="theme_color",
     *      description="theme_color",
     *      example="Red"
     * )
     *
     * @var string
     */

    public $theme_color;
    /**
     * @OA\Property(
     *      title="secondary_color",
     *      description="secondary_color",
     *      example="Red"
     * )
     *
     * @var string
     */
    public $secondary_color;
}
