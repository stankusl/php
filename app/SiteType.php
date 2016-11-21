<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteType extends Model {

    /**
     * Checking whether site exists or not
     * @return string/null
     */

    protected $table = 'site_types';

    public function siteExists($site) {

        $result = $this->where(['slug' => $site])->first();

        return $result;
    }

}
