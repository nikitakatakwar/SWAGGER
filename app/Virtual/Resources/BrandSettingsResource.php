<?php

namespace App\Virtual\Resources;
use App\Virtual\Models\BrandSettings;
/**
 * @OA\Schema(
 *     title="BrandSettingsResource",
 *     description="BrandSettings resource",
 *     @OA\Xml(
 *         name="BrandSettingsResource"
 *     )
 * )
 */
class BrandSettingsResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\BrandSettings[]
     */
    private $data;
}
