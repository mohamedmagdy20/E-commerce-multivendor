<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class TranslationService
{
    public function processTranslations(Model $model, array $data, array $locales)
    {
        foreach ($locales as $locale) {
            $this->processSingleTranslation($model, $locale, $data[$locale] ?? null);
        }
        $model->save();
    }
    protected function processSingleTranslation(Model $model, string $locale, ?array $data)
    {
        try{
            if (empty($data)) {
                if ($model->hasTranslation($locale)) {
                    $model->deleteTranslations($locale);
                }
                return;
            }
    
            $translation = $model->translateOrNew($locale);
            $translation->fill($data);

        }catch (\Exception $e) {
            Log::error("Failed processing {$locale} translation for ".get_class($model), [
                'model_id' => $model->id,
                'error' => $e->getMessage()
            ]);
            throw $e;
        }

    }
}