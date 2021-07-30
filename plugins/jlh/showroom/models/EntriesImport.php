<?php
namespace Jlh\Showroom\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class EntriesImport extends \Backend\Models\ImportModel
{
    protected $rules = [];

    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {

            try {
                $showroom = new Showroom;
                $showroom->fill($data);
                $showroom->save();

                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }
}