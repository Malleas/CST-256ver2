<?php


namespace App\Services\Data;


use App\Models\User;
use App\Services\Utility\MyLogger2;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Array_;

class SecurityDAO
{
    public function findByUser(User $user)
    {
        $logger = new MyLogger2();
        $logger->info("Entering Security DAO (Data) Layer");
        $u = $user->getUsername();
        $p = $user->getPassword();
        $logger->info("Login Parameters from Security DAO are: username " . $u . ' password: ' . $p);
        try {
            if (DB::select("select * from CST_256_ACTIVITY_2.USERS where USERNAME = ? and PASSWORD = ?", [$u, $p])) {
                $logger->info("Entering Security DAO (data) Layer Success");
                return true;
            } else {
                $logger->info("Entering Security DAO (data) Layer Fail");
                return false;
            }
        } catch (\PDOException $e) {
            $logger->error("Exception SecurityDAO::findByUser()" . $e->getMessage());
        }
    }

    public function getAllUsers(){
        $userArray =  Array();
       $users =  DB::select("select * from CST_256_ACTIVITY_2.USERS");
        foreach ($users as $user) {
            array_push($userArray, new User($user->USERNAME, $user->PASSWORD));
       }
        return $userArray;
    }

    public function getUserById($id){
        return DB::select('select * from CST_256_ACTIVITY_2.USERS where USER_ID = ?', [$id]);
    }
}
