<?php

namespace App\Imports;

use App\Models\Rating;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RatingImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Rating([
            'code' => $this->getValue($row, 'code'),
            'title' => substr($this->getValue($row, 'title'), 0, 255),
            'maincateg' => $this->getValue($row, 'maincateg'),
            'platform' => $this->getValue($row, 'platform'),
            'actprice1' => $this->getValue($row, 'actprice1'),
            'norating1' => $this->getValue($row, 'norating1'),
            'noreviews1' => $this->getValue($row, 'noreviews1'),
            'star_5f' => $this->getValue($row, 'star_5f'),
            'star_4f' => $this->getValue($row, 'star_4f'),
            'star_3f' => $this->getValue($row, 'star_3f'),
            'star_2f' => $this->getValue($row, 'star_2f'),
            'star_1f' => $this->getValue($row, 'star_1f'),
            'fulfilled1' => $this->getValue($row, 'fulfilled1'),
        ]);
    }

    private function getValue($row, $key)
    {
        return isset($row[$key]) ? $row[$key] : null;
    }
}
