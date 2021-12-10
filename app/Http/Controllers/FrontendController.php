<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function React\Promise\all;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $frontend = Frontend::latest()->paginate(10);
        return view('pages.support_team.frontend.index',compact('frontend'))
            ->with('i', (request()->input('page', 1) - 1) * 1);
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
        $frontend = new Frontend([
            'id' => $request->get('id'),
            'hero_title' => $request->get('hero_title'),
            'hero_paragraph' => $request->get('hero_paragraph'),
            'card_1_title' => $request->get('card_1_title'),
            'card_1_paragraph' => $request->get('card_1_paragraph'),
            'card_2_title' => $request->get('card_2_title'),
            'card_2_paragraph' => $request->get('card_2_paragraph'),
            'card_3_title' => $request->get('card_3_title'),
            'card_3_paragraph' => $request->get('card_3_paragraph'),
            'card_4_title' => $request->get('card_4_title'),
            'card_4_paragraph' => $request->get('card_4_paragraph'),
            'card_5_title' => $request->get('card_5_title'),
            'card_5_paragraph' => $request->get('card_5_paragraph'),
            'card_6_title' => $request->get('card_6_title'),
            'card_6_paragraph' => $request->get('card_6_paragraph'),
            'value_title' => $request->get('value_title'),
            'value_paragraph' => $request-> get('value_paragraph'),
            'value_card_title' => $request ->get( 'value_card_title'),
            'value_card_subtitle' => $request->get( 'value_card_subtitle'),
            'values_to_gain_1' => $request-> get('values_to_gain_1'),
            'values_to_gain_2' => $request-> get('values_to_gain_2'),
            'values_to_gain_3' => $request-> get('values_to_gain_3'),
            'values_to_gain_4' => $request-> get('values_to_gain_4'),
            'small_container_slug' => $request-> get('small_container_slug'),
            'copyright' => $request-> get('copyright'),
            'facebook' => $request-> get('facebook'),
            'twitter' => $request-> get('twitter'),
            'google' => $request-> get('google'),
        ]);
        Frontend::create($request->all());
        $frontend->update([]);


        return redirect()->route('index')
            ->with('success','details stored successfully.');
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
        $frontend = Frontend::where('id', '=', '1')->first();
        $frontend-> id = $request->get('id');
        $frontend-> hero_title = $request->get('hero_title');
        $frontend-> hero_paragraph = $request->get('hero_paragraph');
        $frontend-> card_1_title = $request->get('card_1_title');
        $frontend->card_1_paragraph = $request->get('card_1_paragraph');
        $frontend-> card_2_title = $request->get('card_2_title');
        $frontend->card_2_paragraph = $request->get('card_2_paragraph');
        $frontend-> card_3_title = $request->get('card_3_title');
        $frontend->card_3_paragraph = $request->get('card_3_paragraph');
        $frontend-> card_4_title = $request->get('card_4_title');
        $frontend->card_4_paragraph = $request->get('card_4_paragraph');
        $frontend-> card_5_title = $request->get('card_5_title');
        $frontend->card_5_paragraph = $request->get('card_5_paragraph');
        $frontend->card_6_title = $request->get('card_6_title');
        $frontend->card_6_paragraph = $request->get('card_6_paragraph');
        $frontend->value_title = $request->get('value_title');
        $frontend->value_paragraph = $request-> get('value_paragraph');
        $frontend->value_card_title = $request ->get( 'value_card_title');
        $frontend->value_card_subtitle = $request->get( 'value_card_subtitle');
        $frontend->values_to_gain_1 = $request-> get('values_to_gain_1');
        $frontend->values_to_gain_2 = $request-> get('values_to_gain_2');
        $frontend->values_to_gain_3 = $request-> get('values_to_gain_3');
        $frontend->values_to_gain_4 = $request-> get('values_to_gain_4');
        $frontend->small_container_slug = $request-> get('small_container_slug');
        $frontend->copyright = $request-> get('copyright');
        $frontend->facebook = $request-> get('facebook');
        $frontend->twitter = $request-> get('twitter');
        $frontend->google = $request-> get('google');
        $frontend->save();

        if($frontend->save()){
            return redirect()->route('index')
                ->with('success','details updated successfully');
        } else {
            return redirect()->route('edit')->with('fail', 'something went wrong');
        }

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

    /**
     * @param Request $request
     */
    public function getValidate(Request $request): void
    {
        $request->validate([
            'id' => 'id',
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
    }
}
