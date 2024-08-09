<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;
use App\Http\Resources\CertificationResource;
use App\Models\Certification;
use App\Repositories\CertificationRepository;

class CertificationController extends Controller
{
    protected $certificationRepository;

    public function __construct(CertificationRepository $certificationRepository)
    {
        $this->certificationRepository = $certificationRepository;
    }

    public function index()
    {
        $certifications = $this->certificationRepository->getAll();
        return CertificationResource::collection($certifications);
    }

    public function store(StoreCertificationRequest $request)
    {
        $data = $request->validated();
        $certification = $this->certificationRepository->create($data);
        return new CertificationResource($certification);
    }

    public function show(Certification $certification)
    {
        return new CertificationResource($certification);
    }

    public function update(UpdateCertificationRequest $request, Certification $certification)
    {
        $data = $request->validated();
        $certification = $this->certificationRepository->update($certification->id, $data);
        return new CertificationResource($certification);
    }

    public function destroy(Certification $certification)
    {
        $this->certificationRepository->delete($certification->id);
        return response()->json(['message' => 'Entity removed']);
    }
}
