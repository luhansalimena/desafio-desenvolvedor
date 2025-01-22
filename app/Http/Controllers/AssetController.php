<?php

namespace App\Http\Controllers;

use App\Actions\Asset\SearchAssets;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/assets",
     *     summary="List all assets",
     *     description="Returns paginated list of assets",
     *     operationId="getAssets",
     *     tags={"Assets"},
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Page number",
     *         required=false,
     *         @OA\Schema(type="integer", default=1)
     *     ),
     *     @OA\Parameter(
     *         name="TckrSymb",
     *         in="query",
     *         description="Ticker symbol",
     *         required=false,
     *         @OA\Schema(type="string", default="AAPL")
     *     ),
     *     @OA\Parameter(
     *         name="RptDt",
     *         in="query",
     *         description="Report date",
     *         required=false,
     *         @OA\Schema(type="string", default="2021-01-01")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(property="id", type="integer", example=1),
     *                     @OA\Property(property="name", type="string", example="Asset name"),
     *                     @OA\Property(property="description", type="string", example="Asset description"),
     *                     @OA\Property(property="created_at", type="string", format="date-time"),
     *                     @OA\Property(property="updated_at", type="string", format="date-time")
     *                 )
     *             ),
     *             @OA\Property(property="meta", type="object",
     *                 @OA\Property(property="current_page", type="integer", example=1),
     *                 @OA\Property(property="total", type="integer", example=30),
     *                 @OA\Property(property="per_page", type="integer", example=15)
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Server error",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Internal server error")
     *         )
     *     )
     * )
     */
    public function index(Request $request, SearchAssets $searchAssets)
    {
        return $searchAssets->handle($request->all());
    }
}
