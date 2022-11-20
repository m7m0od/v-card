<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function profile($profilename)
    {
        $profile=Profile::where('profile_name',$profilename)->with('user')->first();
        //$this->authorize('view',$profile);
        return view('profile.view',['profile' => $profile]);
        /*if(auth()->user()->can('view-any',Profile::class))
        {
            $profile=Profile::where('profile_name',$profilename)->with('user')->first();
            return view('profile.view',['profile' => $profile]);
        }
        return redirect(url('/index'));  */ 
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'profile_name'=>'required|unique:profiles,profile_name',
            'phone'=>'required|numeric',
            'jobTitle'=>'required',
            'location'=>'required',
            'fb'=>'required',
            'linkedIn'=>'required',
            'email'=>'required|email',
            'profile_pic'=>'required|image',
            'github'=>'required',
        ]);
        $data['user_id'] = Auth::user()->id;

        //$path = time().".".$request->profile_pic->extension();
        //$request->profile_pic->move(public_path('profile_img'),$path);
        
        $immg = Storage::putFile('public/prods', $data['profile_pic']);
        $data['profile_pic']=str_replace('public/','storage/',$immg);
        
        Profile::create($data);
        $prof = $data['profile_name'];
        return redirect(url("/profile/$prof"));
    }

    public function allProfiles($userId)
    {
        $profile=Profile::where('user_id',$userId)->with('user')->get();
        
        return view('profile.all',['profile' => $profile]);
    }

    public function updateForm($profile)
    {
        $prod=Profile::findOrFail($profile);
        $this->authorize('update',$prod);
        return view('profile.update',['prod' => $prod]);
    }

    public function update($profile,Request $request)
    {
        $data=$request->validate([
            'profile_name'=>'required',
            'phone'=>'required|numeric',
            'jobTitle'=>'required',
            'location'=>'required',
            'fb'=>'required',
            'linkedIn'=>'required',
            'email'=>'required|email',
            'profile_pic'=>'',
            'github'=>'required',
        ]);
        $data['user_id'] = Auth::user()->id;
        $prod=Profile::findOrFail($profile);

        $this->authorize('update',$prod);

        $immg=$prod->profile_pic;
        if($request->hasFile('profile_pic'))
        {
            $immg=Storage::putFile('public/prods',$data['profile_pic']);
            $data['profile_pic']=str_replace('public/','storage/',$immg);
        }
        Profile::where('id', $profile)->update($data);
        return redirect(url('/user/'.Auth::user()->id));

    }

    public function delete($idProf)
    {
        $prods = Profile::findOrFail($idProf);

        $this->authorize('delete',$prods);
        
        $imgD=str_replace('storage/','public/',$prods->profile_pic);
        Storage::delete($imgD);
        $prods->delete();
        return redirect(url('/user/'.Auth::user()->id));
    }
}
