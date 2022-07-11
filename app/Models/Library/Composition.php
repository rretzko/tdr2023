<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
    use HasFactory;

    protected $fillable = ['arrangement_type_id','medley_id', 'subtitle','title'];

    public function getSummaryHtmlAttribute(): string
    {
        $str = '<div>';

        $str .= '<div>'.$this->title.' ('.strtoupper($this->arrangementType->descr).')</div>';

        $str .= (strlen($this->subtitle)) ? '<div class="px-2 italic text-sm">'.$this->subtitle.'</div>' : '';

        $str .= '</div>';

        return $str;
    }

    public function arrangementType()
    {
        return $this->BelongsTo(ArrangementType::class);
    }
}
