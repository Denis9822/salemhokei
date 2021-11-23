<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


/**
 * App\Models\Section
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $name_ru
 * @property string|null $name_kk
 * @property string|null $name_en
 * @property string|null $description_ru
 * @property string|null $description_kk
 * @property string|null $description_en
 * @property array|null $employees_ru
 * @property array|null $employees_kk
 * @property array|null $employees_en
 * @property array|null $accordion_ru
 * @property array|null $accordion_kk
 * @property array|null $accordion_en
 * @property string|null $meta_title_ru
 * @property string|null $meta_title_kk
 * @property string|null $meta_title_en
 * @property string|null $meta_description_ru
 * @property string|null $meta_description_kk
 * @property string|null $meta_description_en
 * @property string|null $meta_keywords_ru
 * @property string|null $meta_keywords_kk
 * @property string|null $meta_keywords_en
 * @property string|null $alt
 * @property int $views
 * @property int $is_published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Section[] $children
 * @property-read int|null $children_count
 * @property-read \App\Models\Section|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereAccordionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereAccordionKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereAccordionRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereDescriptionKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereDescriptionRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereEmployeesEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereEmployeesKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereEmployeesRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaDescriptionKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaDescriptionRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaKeywordsEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaKeywordsKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaKeywordsRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaTitleKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereMetaTitleRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereNameKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereViews($value)
 * @mixin \Eloquent
 * @property string|null $alias_ru
 * @property string|null $alias_kk
 * @property string|null $alias_en
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereAliasEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereAliasKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Section whereAliasRu($value)
 */
class Section extends Model
{
    protected $table = "sections";

    public $timestamps = true;

    public $casts = [
        "accordion_ru" => "array",
        "accordion_kk" => "array",
        "accordion_en" => "array",
        "employees_ru" => "array",
        "employees_kk" => "array",
        "employees_en" => "array",
    ];

    protected $fillable = [
        "name_ru", "description_ru", "accordion_ru", "employees_ru", "meta_title_ru", "meta_description_ru", "meta_keywords_ru",
        "name_kk", "description_kk", "accordion_kk", "employees_kk", "meta_title_kk", "meta_description_kk", "meta_keywords_kk",
        "name_en", "description_en", "accordion_en", "employees_en", "meta_title_en", "meta_description_en", "meta_keywords_en",
        "parent_id", "alt", "satrud", "email", "views", "is_published", "type","yandex_map","google_map"
    ];

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Section::class, "parent_id");
    }

    public function children()
    {
        return $this->hasMany(Section::class, "parent_id");
    }

    protected $translatable = [
        "name", "description", "accordion", "employees", "meta_title", "meta_description", "meta_keywords",
    ];

    public function getAttribute($key)
    {
        if (in_array($key, $this->translatable)) {
            if (!empty(parent::getAttribute($key . "_" . App::getLocale()))) {
                $key .= "_" . App::getLocale();
            } else {
                $key .= "_ru";
            }
        }

        return parent::getAttribute($key);
    }

    public function preview()
    {
        $key = "description_" . App::getLocale();
        if (!empty(parent::getAttribute($key))) {
            $desc = parent::getAttribute($key);
        } else {
            $desc = parent::getAttribute("description_ru");
        }
        $preview = strip_tags($desc);
        $preview = preg_replace("/[\t]+/", " ", $preview);
        $preview = preg_replace("/ {2,}/", " ", $preview);
        $preview = substr($preview, 0, 200);
        $preview = trim($preview);
        $preview = rtrim($preview, "!,.-");
        $preview = str_replace("\n", "", $preview);
        $preview = substr($preview, 0, strrpos($preview, " "));
        $preview = $preview . "...";
        return $preview;
    }

    public function authors()
    {
        return $this->belongsToMany(User::class, "section_user", "section_id", "user_id");
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class, "section_region", "section_id", "region_id");
    }
}
