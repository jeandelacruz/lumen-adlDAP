<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Adldap\AdldapInterface;
use Adldap\Objects\AccountControl;

Class adLDAPController extends Controller {

    protected $adldap;

    public function __construct(AdldapInterface $adldap)
    {
        $this->adldap = $adldap;
    }

    public function searchActiveDirectory($fieldSearch,$valSearch){
        $user = $this->adldap->search()->whereEquals($fieldSearch, $valSearch)->first();
        if ($user) return $user;
        return 'no existe';
    }

    public function updateActiveDirectory($fieldSearch,$valSearch,$fieldUpdate,$valUpdate){
        $user = $this->adldap->search()->whereEquals($fieldSearch, $valSearch)->first();
        if ($user) {
            $user->updateAttribute($fieldUpdate, $valUpdate);
            return $user;
        } else {
            return 'no existe';
        }
    }

    public function changePassword($fieldSearch,$valSearch,$newPassword){
        $user = $this->adldap->search()->whereEquals($fieldSearch, $valSearch)->first();
        if($user) {
            $user->setPassword($newPassword)->save();
            return $user;
        } else {
            return 'no existe';
        }
    }

    public function lockAccount($fieldSearch,$valSearch){
        $user = $this->adldap->search()->whereEquals($fieldSearch, $valSearch)->first();
        if($user) {
            $user->setUserAccountControl(16)->save();
            return $user;
        } else {
            return 'no existe';
        }
    }

    public function disabledAccount($fieldSearch,$valSearch){
        $user = $this->adldap->search()->whereEquals($fieldSearch, $valSearch)->first();
        if($user) {
            $user->setUserAccountControl(2)->save();
            return $user;
        } else {
            return 'no existe';
        }
    }

    public function enabledAccount($fieldSearch,$valSearch){
        $user = $this->adldap->search()->whereEquals($fieldSearch, $valSearch)->first();
        if($user) {
            $user->setUserAccountControl(512)->save();
            return $user;
        } else {
            return 'no existe';
        }
    }

}