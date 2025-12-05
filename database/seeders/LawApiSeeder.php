<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\Legislation;
use App\Enums\LegislationStatus;
use Illuminate\Support\Str;
use App\Enums\LegislationDocumentType;
use App\Http\Controllers\Admin\Legislation\LegislationController;
use ReflectionMethod;

class LawApiSeeder extends Seeder
{
    public function run()
    {
        $response = Http::get('https://jdih.langkatkab.go.id/all_data.php');
        $data = $response->json();

        $controller = new LegislationController();

        // Gunakan Reflection untuk akses protected method
        $storeDocumentMethod = new ReflectionMethod($controller, 'storeDocument');
        $storeDocumentMethod->setAccessible(true);

        foreach ($data as $item) {
            $categoryMap = [
                'Peraturan Daerah' => 13,
                'Peraturan Bupati' => 26,
                'MOU' => 29,
                'Surat Edaran' => 28,
                'Keputusan Bupati' => 27,
                'PKS' => 29,
            ];
            $category_id = $categoryMap[trim($item['jenis'])] ?? null;

            // Cek apakah judul sudah ada
            // if (Legislation::where('title', $item['judul'])->exists()) {
            //     continue;
            // }

            // Simpan data peraturan (tanpa dokumen)
            $legislation = Legislation::create([
                'category_id'   => $category_id,
                'code_number'   => $item['noPeraturan'],
                'title'         => $item['judul'],
                'slug'          => Str::slug($item['judul']),
                'year'          => $item['tahun_pengundangan'],
                'published'     => $item['tanggal_pengundangan'],
                'approved'      => $item['tanggal_pengundangan'],
                'subject'       => $item['subjek'],
                'status'        => LegislationStatus::BERLAKU,
                'institute_id'  => null,
                'publisher'     => $item['penerbit'],
                'place'         => $item['tempatTerbit'],
                'author'        => $item['teuBadan'],
                'isbn'          => $item['isbn'],
                'user_id'       => 1,
                'published_at'   => $item['terbit'],
            ]);

            // Download PDF dan simpan sebagai dokumen 'master'
            $pdfUrl = $item['urlDownload'];
            $pdfName = $item['fileDownload'] ?? ($item['idData'] . '.pdf');
            // try {
                $pdfContent = Http::get($pdfUrl)->body();
                $tmpPath = storage_path('app/tmp_' . uniqid() . '.pdf');
                file_put_contents($tmpPath, $pdfContent);

                // Buat instance UploadedFile agar bisa diproses storeDocument()
                $uploadedFile = new \Illuminate\Http\UploadedFile(
                    $tmpPath,
                    $pdfName,
                    'application/pdf',
                    null,
                    true
                );

                // Panggil protected method storeDocument via Reflection
                $storeDocumentMethod->invoke($controller, $uploadedFile, $legislation, LegislationDocumentType::MASTER);

                @unlink($tmpPath);
            // } catch (\Exception $e) {
                // Gagal unduh, dokumen tidak dibuat
            // }
            // die();
        }
    }
}
