<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /* for Pre defined methods from the repository */
    protected $user;

    public function __construct(User $userMethods)
    {
        $this->user = $userMethods;
    }

    public function update()
    {
        return response()->redirectTo('/profile')
            ->with('message', 'Great, I get back with the information!');
    }

    public function getJsonData(Request $request)
    {
        /* $user = $this->userMethods->search('name', 'Jerwin');
        $upUsr = $this->userMethods->find(16);
        if ($upUsr) {
            $this->userMethods->update($upUsr, ['name' => 'Anthony Capuyan']);
            
        } */
        //dd($request->all());
        /* $user = $this->user->create([
            'email'=>'jps@gmail.com', 
            'profile'=>'jejsomar.jpg', 
            'password'=>'Jejomar09', 
            'user_name'=>'Jejomarr4', 
            'gender'=>'Male', 
            'contact'=>'0909809', 
            'user_level'=>'3',
            'first_name'=>'Jejomar',  
            'last_name'=>'Parrilla', 
            'middle_name'=>'',
            'current_address'=>1, 
            'other_address'=>2
        ]);

        $user->save(); */
        return response()->json($this->user->getUser());
        //dd($request->all());
    }
}
