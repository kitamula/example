<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShopArticleRequest;
use App\Http\Requests\UpdateShopArticleRequest;
use App\Models\ShopArticle;

class ShopArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShopArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopArticle  $shopArticle
     * @return \Illuminate\Http\Response
     */
    public function show(ShopArticle $shopArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShopArticle  $shopArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopArticle $shopArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopArticleRequest  $request
     * @param  \App\Models\ShopArticle  $shopArticle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopArticleRequest $request, ShopArticle $shopArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopArticle  $shopArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopArticle $shopArticle)
    {
        //
    }
}
