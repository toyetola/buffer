<?php

    namespace App\Http\Controllers;

    use App\bucketList;
    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Tymon\JWTAuth\Facades\JWTAuth;
    use Tymon\JWTAuth\Exceptions\JWTException;

    class UserController extends Controller
    {
        public function authenticate(Request $request)
        {
            $credentials = $request->only('email', 'password');

            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['error' => 'invalid_credentials'], 400);
                }
            } catch (JWTException $e) {
                return response()->json(['error' => 'could_not_create_token'], 500);
            }

            return response()->json(['status'=>'logged in','token'=>$token]);

            /*$credentials = $request->only('email', 'password');
            if (!$token = JWTAuth::attempt($credentials)) {
                return response([
                    'status' => 'error',
                    'error' => 'invalid.credentials',
                    'msg' => 'Invalid Credentials.'
                ], 400);
            }
            return response([
                'status' => 'success',
                'token' => $token
            ]);*/
        }

        public function register(Request $request)
        {
            try{
                $validator = Validator::make($request->all(), [
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                ]);

                if($validator->fails()){
                    return response()->json($validator->errors()->toJson(), 401);
                }

                $user = User::create([
                    'email' => $request->get('email'),
                    'password' => Hash::make($request->get('password')),
                ]);

                $token = JWTAuth::fromUser($user);

                return response()->json(compact('user', 'token'),201);

            }catch(\Exception $e){
                return response()->json(['error'=>$e->getMessage()], 500);
            }
        }


        public function user(Request $request)
        {
            $user = User::find(Auth::user()->id);
            return response([
                'status' => 'success',
                'data' => $user
            ]);
        }


        public function getAuthenticatedUser()
        {
                    try {

                            if (! $user = JWTAuth::parseToken()->authenticate()) {
                                    return response()->json(['user_not_found'], 404);
                            }

                    } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                            return response()->json(['token_expired'], $e->getStatusCode());
                    } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                            return response()->json(['token_invalid'], $e->getStatusCode());

                    } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

                            return response()->json(['token_absent'], $e->getStatusCode());

                    }

                    return response()->json(['user'=>$user]);
        }


        public function logout(Request $request) {

            try {
                $this->validate($request, ['token' => 'required']);
                return response([
                    'status' => 'success',
                    'msg' => 'You have successfully logout '
                ]);
            } catch (JWTException $e) {
                // something went wrong whilst attempting to encode the token
                return response([
                    'status' => 'error',
                    'msg' => 'Failed to logout, please try again.'
                ]);
            }
        }

        public function refresh()
        {
            return response([
                'status' => 'success'
            ]);
        }


    }
