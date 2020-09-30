
 <?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\UserProfile\UserProfileInterface;
use Main\Supports\Patterns\Abstracts\AppRepository as Repository;

class UserRepository extends Repository implements UserInterface
{
    public $profileRepository;

    public function __construct(
        UserProfileInterface $profileRepository
    )
    {
        parent::__construct();
        $this->profileRepository = $profileRepository;
    }
    
    public function model()
    {
        return User::class;
    }

    public function getLastesUser()
    {
    	$categoryProduct = Category::where('status', 1)->get();

    	$new_product = Product::where('id_category',$request->id)->get();

    	$same_product = Product::where('id_category',$id)->orderBy('unit_price','desc')->get();

    	$product = Product::where('id', $request->id)->first();   
    }

}