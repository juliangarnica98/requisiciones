//<?php
//
//amespace App\Http\Controllers\Api\Auth;
//
//se App\Http\Controllers\Controller;
//se App\Http\Resources\Auth\AuthResource;
//se App\Models\Store;
//se App\Models\User;
//se Illuminate\Http\Request;
//se Illuminate\Support\Facades\Validator;
//se Tymon\JWTAuth\Exceptions\JWTException;
//se Tymon\JWTAuth\Facades\JWTAuth;
//se Illuminate\Support\Facades\Hash;
//se Illuminate\Validation\ValidationException;
//
//lass AuthController extends Controller
//
//
//   public function register(Request $request){
//       $validator = Validator::make($request->all(), [
//           'name' => 'required|string',
//           'last_name' => 'required|string',
//           'email' =>'required|email|unique:users',
//           'password'=>'required|min:8|confirmed',
//       ]);
//
//       if ($validator->fails()) {
//           return response()->json( $validator->errors(),500);
//       }
//       $store = Store::findOrFail($request->store_id);
//
//       $user = $store->user()->create([
//           'name' =>$request['name'],
//           'last_name' =>$request['last_name'],
//           'email' =>$request['email'],
//           'password' => bcrypt($request['password']),
//          
//       ]);
//       $user->assignRole('Admin');
//
//       $token = JWTAuth::fromUser($user);
//       return response()->json( [
//           'user'=>$user,
//           'token'=>$token
//       ],200 );
//
//   }
//
//   public function login(Request $request){
//       $validator = Validator::make($request->all(), [
//           'email' =>'required|email',
//           'password'=>'required|min:8',
//       ]);
//
//       if ($validator->fails()) {
//           return response()->json( $validator->errors(),500);
//       }
//       $user = User::where('email', $request->email)->first();
//
//       if (! $user || ! Hash::check($request->password, $user->password)) {
//           throw ValidationException::withMessages([
//               'email' => ['The provided credentials are incorrect.'],
//           ]);
//       }
//       $token = $user->createToken("myToken")->plainTextToken;
//       return AuthResource::make([
//           'token'=>$token,
//           'user'=>[
//               'name'=>$user->name,
//               'email'=>$user->email,
//           ],
//       ]); 

        // $credentials = $request->only('email','password');
        // try {
        //     if (!$token = JWTAuth::attempt($credentials)) {
        //         return response()->json([
        //             'error'=>'Credenciales invalidas'
        //         ],400);
        //     }
        // } catch (JWTException $e) {
        //     return response()->json([
        //         'error'=>'not create token'
        //     ],500);
        // }
        // return response()->json(
        //      ['token'=>$token,
        //        'user'=>$user ]
        //     ,200);
//     }
// }
