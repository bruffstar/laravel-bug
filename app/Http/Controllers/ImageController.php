<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ImageController extends Controller
{
    /**
     * Return the image for a given id.
     *
     * @param int $id
     * @return BinaryFileResponse
     */
    public function index(int $id): BinaryFileResponse
    {
        $file = storage_path("images/$id.jpg");

        return response()->file($file, ['Content-Type' => 'image/jpg']);
    }
}
