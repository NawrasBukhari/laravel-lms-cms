<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $frontend = Frontend::latest()->paginate(5);

        return view('pages.support_team.frontend.index',compact('frontend'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('pages.support_team.frontend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'hero_title' => 'required',
            'hero_paragraph' => 'required',
            'card_1_title' => 'required',
            'card_1_paragraph' => 'required',
            'card_2_title' => 'required',
            'card_2_paragraph' => 'required',
            'card_3_title' => 'required',
            'card_3_paragraph' => 'required',
            'card_4_title' => 'required',
            'card_4_paragraph' => 'required',
            'card_5_title' => 'required',
            'card_5_paragraph' => 'required',
            'card_6_title' => 'required',
            'card_6_paragraph' => 'required',
            'value_title' => 'required',
            'value_paragraph' => 'required',
            'value_card_title' => 'required',
            'value_card_subtitle' => 'required',
            'values_to_gain_1' => 'required',
            'values_to_gain_2' => 'required',
            'values_to_gain_3' => 'required',
            'values_to_gain_4' => 'required',
            'small_container_slug' => 'required',
            'copyright' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'google' => 'required',
        ]);
        Frontend::create($request->all());

        return redirect()->route('pages.support_team.frontend.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Frontend $frontend
     * @return Application|Factory|View
     */
    public function show(Frontend $frontend)
    {
        return view('pages.support_team.frontend.show',compact('frontend'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Frontend $frontend
     * @return Application|Factory|View
     */
    public function edit(Frontend $frontend)
    {
        return view('pages.support_team.frontend.edit',compact('frontend'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Frontend $frontend
     * @return RedirectResponse
     */
    public function update(Request $request, Frontend $frontend)
    {
        $request->validate([
            'hero_title' => 'required',
            'hero_paragraph' => 'required',
            'card_1_title' => 'required',
            'card_1_paragraph' => 'required',
            'card_2_title' => 'required',
            'card_2_paragraph' => 'required',
            'card_3_title' => 'required',
            'card_3_paragraph' => 'required',
            'card_4_title' => 'required',
            'card_4_paragraph' => 'required',
            'card_5_title' => 'required',
            'card_5_paragraph' => 'required',
            'card_6_title' => 'required',
            'card_6_paragraph' => 'required',
            'value_title' => 'required',
            'value_paragraph' => 'required',
            'value_card_title' => 'required',
            'value_card_subtitle' => 'required',
            'values_to_gain_1' => 'required',
            'values_to_gain_2' => 'required',
            'values_to_gain_3' => 'required',
            'values_to_gain_4' => 'required',
            'small_container_slug' => 'required',
            'copyright' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'google' => 'required',
        ]);
        $frontend->update($request->all());

        return redirect()->route('pages.support_team.frontend.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Frontend $frontend
     * @return RedirectResponse
     */
    public function destroy(Frontend $frontend)
    {
        $frontend->delete();

        return redirect()->route('frontend.index')
            ->with('success','Product deleted successfully');
    }
}
