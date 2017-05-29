<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevdoRequest;
use App\Http\Requests\UpdatevdoRequest;
use App\Repositories\vdoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vdoController extends AppBaseController
{
    /** @var  vdoRepository */
    private $vdoRepository;

    public function __construct(vdoRepository $vdoRepo)
    {
        $this->vdoRepository = $vdoRepo;
    }

    /**
     * Display a listing of the vdo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vdoRepository->pushCriteria(new RequestCriteria($request));
        $vdos = $this->vdoRepository->all();

        return view('vdos.index')
            ->with('vdos', $vdos);
    }

    /**
     * Show the form for creating a new vdo.
     *
     * @return Response
     */
    public function create()
    {
        return view('vdos.create');
    }

    /**
     * Store a newly created vdo in storage.
     *
     * @param CreatevdoRequest $request
     *
     * @return Response
     */
    public function store(CreatevdoRequest $request)
    {
        $input = $request->all();

        $vdo = $this->vdoRepository->create($input);

        Flash::success('Vdo saved successfully.');

        return redirect(route('vdos.index'));
    }

    /**
     * Display the specified vdo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vdo = $this->vdoRepository->findWithoutFail($id);

        if (empty($vdo)) {
            Flash::error('Vdo not found');

            return redirect(route('vdos.index'));
        }

        return view('vdos.show')->with('vdo', $vdo);
    }

    /**
     * Show the form for editing the specified vdo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vdo = $this->vdoRepository->findWithoutFail($id);

        if (empty($vdo)) {
            Flash::error('Vdo not found');

            return redirect(route('vdos.index'));
        }

        return view('vdos.edit')->with('vdo', $vdo);
    }

    /**
     * Update the specified vdo in storage.
     *
     * @param  int              $id
     * @param UpdatevdoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevdoRequest $request)
    {
        $vdo = $this->vdoRepository->findWithoutFail($id);

        if (empty($vdo)) {
            Flash::error('Vdo not found');

            return redirect(route('vdos.index'));
        }

        $vdo = $this->vdoRepository->update($request->all(), $id);

        Flash::success('Vdo updated successfully.');

        return redirect(route('vdos.index'));
    }

    /**
     * Remove the specified vdo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vdo = $this->vdoRepository->findWithoutFail($id);

        if (empty($vdo)) {
            Flash::error('Vdo not found');

            return redirect(route('vdos.index'));
        }

        $this->vdoRepository->delete($id);

        Flash::success('Vdo deleted successfully.');

        return redirect(route('vdos.index'));
    }
}
