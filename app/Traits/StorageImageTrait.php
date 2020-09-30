<?php
namespace App\Traits;

use Illuminate\Support\Str;
use Storage;

trait StorageImageTrait{
	public function StorageTraitUpload($request, $fieldName, $folderName)
	{
		if ($request->hasFile($fieldName)) {
			$file            = $request->$fieldName;
			$fileNameOrigin  = $file->getClientOriginalName();
			$fileName        = Str::random(20) . '.' . $file->getClientOriginalExtension();
			$filePath        = $request->file($fieldName)->storeAs('public/' . $folderName . '/' . auth()->id(), $fileName);
			$dataUploadTrait = [
				'file_name' => $fileNameOrigin,
				'file_path' => Storage::url($filePath),
			];

			return $dataUploadTrait;
		}
		return null;
	}
}
	

