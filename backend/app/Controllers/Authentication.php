<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Restful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Authentication extends ResourceController
{
    private $acc, $role, $accinfo, $booking, $hotels, $hotelinfo, $HotelsResorts;
    public function __construct() {
        $this->accinfo = new \App\Models\AccountInfo();
        $this->booking = new \App\Models\BookingInfo();
        $this->hotels = new \App\Models\HotelsResorts();
        $this->hotelinfo = new \App\Models\HotelInfo();
        $this->HotelsResorts = new \App\Models\HotelAccount();
        $this->acc = new \App\Models\Account();
        $this->role = new \App\Models\Role();
    }

    public function Register()
    {
        $random = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ", 60)), 0, 60);
        $json = $this->request->getJSON();
        $data = [
            'username' => $json->username,
            'email' => $json->email,
            'password' => password_hash($json->password, PASSWORD_DEFAULT),
            'token' => sha1($random),
            'phone' => $json->phone,
            'address' => $json->address,
            'status' => 'UNVERIFIED'
        ];

        $checkdupliemail = $this->acc->where('email',$data['email'])->First();
        $checkdupliuname = $this->acc->where('username', $data['username'])->First();
        $checkdupliphone = $this->acc->where('phone', $data['phone'])->First();

        if($checkdupliemail) {
            return $this->respond(['msg' => 'A user exists with that email. Please change your email.'], 200);
        } else if ($checkdupliuname) {
            return $this->respond(['msg' => 'A user exists with that username. Please change your username.'], 200);
        } else if ($checkdupliphone) {
            return $this->respond(['msg' => 'A user exists with that phone number. Please change your phone number.'], 200);
        } else {
            $reg = $this->acc->save($data);
            if ($reg) {
                $get = $this->acc->where('username', $json->username)->first();
                $data2 = [
                    'account_id' => $get['id'],
                    'role_name' => $json->role,
                ];
                $assigned = $this->role->save($data2);
                if ($assigned) {
                    return $this->respond(['msg' => 'Registered Successfully'], 200);
                } else {
                    return $this->respond(['msg' => 'An error occurred, Please try again later.'], 200);
                }
            } else {
                return $this->respond(['msg' => 'An error occurred, Please try again later.'], 200);
            }
        }
    }

    public function Login() {

        $random = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ", 60)), 0, 60);
        $newToken = $random;
        if($this->request->getVar('username')) {
            $username = $this->request->getVar('username'); 
        } else {
            $username = '';
        }

        if ($this->request->getVar('email')) {
            $email = $this->request->getVar('email');
        } else {
            $email = '';
        }

        $password = $this->request->getVar('password');

        if($username != '') {
            $data = $this->acc->where('username', $username)->first(); 
            if($data){ 
                $get = $this->role->where('account_id', $data['id'])->first(); 
                if($data['status'] == 'ACTIVE' || $data['status'] == 'VERIFIED') {
                    $pass = $data['password']; 
                    $authenticatePassword = password_verify($password, $pass); 
                    if($authenticatePassword) { 
                        $this->acc->set('token',sha1($newToken))->where('id', $data['id'])->update();
                        return $this->respond(['msg' => 'okay', 'token' =>$newToken, 'status' => $data['status'], 'role' => $get['role_name']], 200); 
        
                    }else{ 

                        return $this->respond(['msg' => 'wrong password.'], 200); 
        
                    } 
                } else {
                    return $this->respond(['msg' => 'Please verify your email before logging in.'], 200);
                }
    
            } else {
                return $this->respond(['msg' => 'User doesn\'t exists.'], 200); 
            }
        } else {
            $data = $this->acc->where('email', $email)->first(); 
            if($data){ 
                $get = $this->role->where('account_id', $data['id'])->first(); 
                if($data['status'] == 'ACTIVE' || $data['status'] == 'VERIFIED') {
                    $pass = $data['password']; 
                    $authenticatePassword = password_verify($password, $pass); 
                    if($authenticatePassword){ 
                        $this->acc->set('token',sha1($newToken))->where('id', $data['id'])->update();
                        return $this->respond(['msg' => 'okay', 'token' =>$newToken, 'status' => $data['status'], 'role' => $get['role_name']], 200); 
        
                    }else{ 
        
                        return $this->respond(['msg' => 'wrong password.'], 200); 
        
                    }
                } else {
                    return $this->respond(['msg' => 'Please verify your email before logging in.'], 200);
                } 
    
            } else {
                return $this->respond(['msg' => 'User doesn\'t exists.'], 200); 
            }
        }

    }

    public function Logout() {
        $token = $this->request->getVar('token'); 
        $data = $this->acc->where('token', sha1($token))->First();
        $random = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ", 60)), 0, 60);
        if($data) {
            $upd = $this->acc->set('token',sha1($random))->where('id', $data['id'])->update();
            if($upd) {
                return $this->respond(['msg' => 'okay'], 200);
            } else {
                return $this->respond(['msg' => 'an error has occurred.'], 200);
            }
        } else {
            return $this->respond(['msg' => 'an error has occurred.'], 200);
        }


    }

    public function Account_Info() {
        $token = $this->request->getVar('token');
        $data = $this->acc->where('token', sha1($token))->First();
        $check = $this->accinfo->where('user_id', $data['id'])->First();
        if ($check){
            $info = [
                'username' => $data['username'],
                'email' => $data['email'],
                'phone' => $data['phone'], 
                'address' => $data['address'],
                'first_name' => $check['first_name'],
                'middle_name' => $check['middle_name'],
                'last_name' => $check['last_name'],
                'birthdate' => $check['birthdate'],
                'gender' => $check['gender'],
                'photo' => $check['photo'],
                'once' => false,
                'msg' => 'okay', 
            ];
            return $this->respond($info, 200); 
        } else {
            $info = [
                'username' => $data['username'],
                'email' => $data['email'],
                'phone' => $data['phone'], 
                'address' => $data['address'],
                'first_name' => 'your first name',
                'middle_name' => 'your middle name',
                'last_name' => 'your last name',
                'birthdate' => 'your birthdate',
                'gender' => 'your gender',
                'photo' => '/default.jpg', 
                'once' => true, 
                'msg' => 'okay', 
            ];
            return $this->respond($info, 200);
        }
    }

    public function Account_Info_Save() {

        $token = $this->request->getVar('token');
        $data = $this->acc->select('id')->where('token', sha1($token))->First();
        $check = $this->accinfo->where('user_id', $data['id'])->First();
        if ($check) {
            $username = $this->request->getVar('username');
            $email = $this->request->getVar('email');
            $phone = $this->request->getVar('phone');
            
            $cond_email = array('id !=' => $data['id'], 'email' => $email);
            $cond_uname = array('id !=' => $data['id'], 'username' => $username);
            $cond_phone = array('id !=' => $data['id'], 'phone' => $phone);

            $checkdupliemail = $this->acc->where($cond_email)->First();
            $checkdupliuname = $this->acc->where($cond_uname)->First();
            $checkdupliphone = $this->acc->where($cond_phone)->First();

            if ($checkdupliemail) {
                return $this->respond(['msg' => 'duplicate email.'], 200);
            } else if($checkdupliphone) {
                return $this->respond(['msg' => 'duplicate phone.'], 200);
            } else if($checkdupliuname) {
                return $this->respond(['msg' => 'duplicate username.'], 200);
            } else {
                $file = $this->request->getFile('photo');
                if($file != null) {

                    $test = $file->move(PUBLIC_PATH.'\\account\\'.$data['id'].'\\');
                    $name = $file->getClientPath();
                    $path = '/account/'.$data['id'].'/'.$name;
                    
                    if (!$test) {
                        return $this->respond(['msg' => 'can\'t save image.'], 200); 
                    }else { 
                        unlink(PUBLIC_PATH.$check['photo']);
                        $data1 = [
                            'first_name' => $this->request->getVar('first_name'),
                            'middle_name' => $this->request->getVar('middle_name'),
                            'last_name' => $this->request->getVar('last_name'),
                            'gender' => $this->request->getVar('gender'),
                            'photo' => $path,
                        ];
                        $data2 =[
                            'username' => $username,
                            'email' => $email,
                            'phone' => $phone,
                            'address' => $this->request->getVar('address'),
                        ];
        
                        $res = $this->accinfo->set($data1)->where('user_id', $data['id'])->update();
                        $acco = $this->acc->set($data2)->where('token', sha1($token))->update();
                        if ($res && $acco) {
                            return $this->respond(['msg' => 'okay'], 200);
                        } else {
                            $delfile = PUBLIC_PATH.$path;
                            unlink($delfile); 
                            return $this->respond(['msg' => 'an error has occurred'], 200);
                        }
                    } 
                } else {
                    $data1 = [
                        'first_name' => $this->request->getVar('first_name'),
                        'middle_name' => $this->request->getVar('middle_name'),
                        'last_name' => $this->request->getVar('last_name'),
                        'gender' => $this->request->getVar('gender'),
                        'photo' => $check['photo'],
                    ];
                    $data2 =[
                        'username' => $username,
                        'email' => $email,
                        'phone' => $phone,
                        'address' => $this->request->getVar('address'),
                    ];
    
                    $res = $this->accinfo->set($data1)->where('user_id', $data['id'])->update();
                    $acco = $this->acc->set($data2)->where('token', sha1($token))->update();
                    if ($res && $acco) {
                        return $this->respond(['msg' => 'okay'], 200);
                    } else { 
                        return $this->respond(['msg' => 'an error has occurred'], 200);
                    }
                }
            }       
        //save
        } else {
            $username = $this->request->getVar('username');
            $email = $this->request->getVar('email');
            $phone = $this->request->getVar('phone');
            
            $cond_email = array('id !=' => $data['id'], 'email' => $email);
            $cond_uname = array('id !=' => $data['id'], 'username' => $username);
            $cond_phone = array('id !=' => $data['id'], 'phone' => $phone);

            $checkdupliemail = $this->acc->where($cond_email)->First();
            $checkdupliuname = $this->acc->where($cond_uname)->First();
            $checkdupliphone = $this->acc->where($cond_phone)->First();

            if ($checkdupliemail) {
                return $this->respond(['msg' => 'duplicate email.'], 200);
            } else if($checkdupliphone) {
                return $this->respond(['msg' => 'duplicate phone.'], 200);
            } else if($checkdupliuname) {
                return $this->respond(['msg' => 'duplicate username.'], 200);
            } else {

                $file = $this->request->getFile('photo');
                if($file != null) {

                    $test = $file->move(PUBLIC_PATH.'\\account\\'.$data['id'].'\\');
                    $name = $file->getClientPath();
                    $path = '/account/'.$data['id'].'/'.$name;

                    if ( ! $test) {
                        return $this->respond(['msg' => 'can\'t save image.'], 200); 
                    }else { 
                        $data1 = [
                            'first_name' => $this->request->getVar('first_name'),
                            'middle_name' => $this->request->getVar('middle_name'),
                            'last_name' => $this->request->getVar('last_name'),
                            'birthdate' => $this->request->getVar('birthdate'),
                            'gender' => $this->request->getVar('gender'),
                            'photo' => $path,
                            'user_id' => $data['id'],
                        ];
                        $data2 =[
                            'username' => $username,
                            'email' => $email,
                            'phone' => $phone,
                            'address' => $this->request->getVar('address'),
                        ];
        
                        $res = $this->accinfo->save($data1);
                        $acco = $this->acc->set($data2)->where('token', sha1($token))->update();
                        if ($res && $acco) {
                            return $this->respond(['msg' => 'okay'], 200);
                        } else {
                            $delfile = PUBLIC_PATH.$path;
                            unlink($delfile); 
                            return $this->respond(['msg' => 'an error has occurred'], 200);
                        }
                    } 
                } else {
                    $data1 = [
                        'first_name' => $this->request->getVar('first_name'),
                        'middle_name' => $this->request->getVar('middle_name'),
                        'last_name' => $this->request->getVar('last_name'),
                        'birthdate' => $this->request->getVar('birthdate'),
                        'gender' => $this->request->getVar('gender'),
                        'photo' => '/default.jpg',
                        'user_id' => $data['id'],
                    ];
                    $data2 =[
                        'username' => $username,
                        'email' => $email,
                        'phone' => $phone,
                        'address' => $this->request->getVar('address'),
                    ];
    
                    $res = $this->accinfo->save($data1);
                    $acco = $this->acc->set($data2)->where('token', sha1($token))->update();
                    if ($res && $acco) {
                        return $this->respond(['msg' => 'okay'], 200);
                    } else {
                        return $this->respond(['msg' => 'an error has occurred'], 200);
                    }
                }
            }
        }
        
    }

    public function Past_Booking() {
        $token = $this->request->getVar('token');
        $data = $this->acc->select('tourists_account.id')->join('tourists_info','tourists_info.user_id = tourists_account.id','inner')->where('token', sha1($token))->First();
        $cond = array('tourist_id'=> $data['id'], 'status' => 'COMPLETED');
        $check = $this->booking->select('pax, reservation_date, transaction_date, room_id')->where($cond)->GetAll();
        //$getHotelname = $this->join('rooms','rooms.id = booking_info.room_id','inner')->where()->First();
        if($check) {
            return $this->respond($check, 200);
        } else {
            return $this->respond(['msg' => 'an error has occured'], 200);
        }
    }
    public function UserData() {
        $data = $this->acc->findAll();
        $this->acc->findAll();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        }

    public function Select($id) {
        $data = $this->acc->where('id', $id)->First();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        
    }
}