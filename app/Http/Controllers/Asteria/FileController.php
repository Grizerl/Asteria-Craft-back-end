<?php

namespace App\Http\Controllers\Asteria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;


class FileController extends Controller
{
    public function download()
    {
        $filePath = app_path('path/Minecraft.exe'); // Шлях до вашого файлу
        $fileName = 'MinecraftInstaller.exe'; // Ім'я файлу, яке буде завантажено

        if (!File::exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath, $fileName);
    }
    public function download_launcher()
    {
        $filePath = app_path('path/launcher.exe'); // Шлях до вашого файлу
        $fileName = 'Tlauncher.exe'; // Ім'я файлу, яке буде завантажено

        if (!File::exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath, $fileName);
    }
}
