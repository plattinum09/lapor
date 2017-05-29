<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateslideRequest;
use App\Http\Requests\UpdateslideRequest;
use App\Repositories\slideRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class slideController extends AppBaseController
{
    /** @var  slideRepository */
    private $slideRepository;

    public function __construct(slideRepository $slideRepo)
    {
        $this->slideRepository = $slideRepo;
    }

    /**
     * Display a listing of the slide.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->slideRepository->pushCriteria(new RequestCriteria($request));
        $slides = $this->slideRepository->all();

        return view('slides.index')
            ->with('slides', $slides);
    }

    /**
     * Show the form for creating a new slide.
     *
     * @return Response
     */
    public function create()
    {
        return view('slides.create');
    }

    /**
     * Store a newly created slide in storage.
     *
     * @param CreateslideRequest $request
     *
     * @return Response
     */
    public function store(CreateslideRequest $request)
    {
        $input = $request->all();
        if ($request->file('image')) {
            $namepicture = rand().'-'.rand();
            $imageName = $namepicture . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(
                base_path() . '/public/images/product/', $imageName
            );
            $input['image'] = $imageName;
        }
        
        $slide = $this->slideRepository->create($input);

        Flash::success('Slide saved successfully.');

        return redirect(route('slides.index'));
    }

    /**
     * Display the specified slide.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slide = $this->slideRepository->findWithoutFail($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        return view('slides.show')->with('slide', $slide);
    }

    /**
     * Show the form for editing the specified slide.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slide = $this->slideRepository->findWithoutFail($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        return view('slides.edit')->with('slide', $slide);
    }

    /**
     * Update the specified slide in storage.
     *
     * @param  int              $id
     * @param UpdateslideRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateslideRequest $request)
    {
        $slide = $this->slideRepository->findWithoutFail($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }
        
        $input = $request->all();
        unset($input['image']);
        if ($request->file('image')) {
            $namepicture = rand().'-'.rand();
            $imageName = $namepicture . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(
                base_path() . '/public/images/product/', $imageName
            );
            $input['image'] = $imageName;
        }
        $slide = $this->slideRepository->update($input, $id);

        Flash::success('Slide updated successfully.');

        return redirect(route('slides.index'));
    }

    /**
     * Remove the specified slide from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slide = $this->slideRepository->findWithoutFail($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        $this->slideRepository->delete($id);

        Flash::success('Slide deleted successfully.');

        return redirect(route('slides.index'));
    }
}
