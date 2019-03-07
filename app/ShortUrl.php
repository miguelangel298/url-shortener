<?php

namespace App;

use App\utils\UrlShort;
use Illuminate\Database\Eloquent\Model;


class ShortUrl extends Model
{
    protected $fillable = ['url', 'code', 'counter'];

    /**
     * @return mixed
     */

    public  function  validateShortUrl(string $validUrl) {

        $valid = ShortUrl::where('code', $validUrl)->count() ? false : true;

        return $valid;
    }


    public function generateShortUrl() {
        $urlShort = new UrlShort();

        for ($i=0; $i < 100 ; $i++) {
            $newCode = $urlShort->generate();
            $valid = $this->validateShortUrl($newCode);
            if ($valid) {
                $this->code = $newCode;
            }
        }

        return $this->code;
    }

}

