<?php

namespace Xeight8\Kladmin\Http\Controllers\PageBuilder;

use Xeight8\Kladmin\Http\Controllers\KladminBaseController;
use Illuminate\Http\Request;
use Validator;
use Xeight8\Kladmin\Models\PagebuilderPage;

class PageBuilderController extends KladminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kladmin::pagebuilder.pagebuilder');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kladmin::admin.pagebuilder.pagebuilder-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new PagebuilderPage;

        $validator = Validator::make($request->all(), $page->rules);

        if ($validator->fails()) {
            return redirect()->route('kladmin.pagebuilder.create')->withErrors($validator);
        }

        $page = PagebuilderPage::create($request->all());

        return redirect()->route('kladmin.pagebuilder.edit', ['slug' => $page->slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('kladmin::admin.pagebuilder.pagebuilder-edit', compact('slug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
