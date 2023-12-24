<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use CodeIgniter\Restful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class HotelsResortsAccount extends ResourceController
{
    private $HotelsResorts, $acc, $room;
    public function __construct() {
        $this->HotelsResorts = new \App\Models\HotelAccount();
        $this->acc = new \App\Models\Account();
        $this->room = new \App\Models\Room();
    }

    public function Hotel_Verify() {

        $token = $this->request->getVar("token");
        $description = $this->request->getVar('description');
        $insurance = $this->request->getFile('insurance');
        $assessment = $this->request->getFile('assessment');
        $application = $this->request->getFile('application');
        $intent = $this->request->getFile('intent');
        $discharge = $this->request->getFile('discharge');
        $logo = $this->request->getFile('logo');
        $mayors_permit = $this->request->getFile('mayors_permit');
        $id = $this->acc->select('id')->where('token', sha1($token))->First();

        //testing to be shorten 
            $test1 = $insurance->move(PUBLIC_PATH.'\\hotels\\'.$id.'\\');
            $name1 = $insurance->getClientPath();
            $path1 = '/hotels/'.$id.'/'.$name1;

            $test2 = $assessment->move(PUBLIC_PATH.'\\hotels\\'.$id.'\\');
            $name2 = $assessment->getClientPath();
            $path2 = '/hotels/'.$id.'/'.$name2;

            $test3 = $application->move(PUBLIC_PATH.'\\hotels\\'.$id.'\\');
            $name3 = $application->getClientPath();
            $path3 = '/hotels/'.$id.'/'.$name3;

            $test4 = $intent->move(PUBLIC_PATH.'\\hotels\\'.$id.'\\');
            $name4 = $intent->getClientPath();
            $path4 = '/hotels/'.$id.'/'.$name4;

            $test5 = $discharge->move(PUBLIC_PATH.'\\hotels\\'.$id.'\\');
            $name5 = $discharge->getClientPath();
            $path5 = '/hotels/'.$id.'/'.$name5;

            $test6 = $logo->move(PUBLIC_PATH.'\\hotels\\'.$id.'\\');
            $name6 = $logo->getClientPath();
            $path6 = '/hotels/'.$id.'/'.$name6;

            $test7 = $mayors_permit->move(PUBLIC_PATH.'\\hotels\\'.$id.'\\');
            $name7 = $mayors_permit->getClientPath();
            $path7 = '/hotels/'.$id.'/'.$name7;

            if($test1 && $test2 && $test3 && $test4 && $test5 && $test6 && $test7) {
                $data = [
                    'description' => $description,
                    'insurance' => $path1,
                    'assessment' => $path2,
                    'application' => $path3,
                    'intent' => $path4,
                    'discharge' => $path5,
                    'logo' => $path6,
                    'mayors_permit' => $path7,
                    'status' => 'PROCESSING',
                    'account_id' => $id,
                ];
                $reg = $this->HotelsResorts->save($data);
                if ($reg) {
                        return $this->respond(['msg' => 'okay'], 200);
                    } else {
                        return $this->respond(['msg' => 'Please try again later.'], 200);
                    }
            } else {
                return $this->respond(['msg' => 'Something went wrong in uploading the files.'], 200);
            }
        
    }

    public function room() {
    $get = $this->acc->where('token', sha1($this->request->getVar('token')))->First();
    $list = $this->room->select('name, description, number, price, photo, rooms.status as status')->join('account','account.id = rooms.account_id','inner')->where(['account_id' => $get['id'], 'rooms.id' => $this->request->getVar('rid')])->First();
      if($list) {
        $selected = [
          'id' => $list['id'],
          'name' => $list['name'],
          'number' => $list['number'],
          'description' => $list['description'], 
          'price' => $list['price'],
          'status' => $list['status'],
      ];
      return $this->respond($selected, 200); 
      } else {
        $selected = [
          'id' => null,
          'name' => null,
          'number' => null,
          'description' => null, 
          'price' => null,
          'status' => null,
      ];
      return $this->respond($selected, 200);
      }
    }

    public function room_edit() {
      $token = $this->request->getVar('token');
      $data = $this->acc->select('id')->where('token', sha1($token))->First();
      $check = $this->room->where(['account_id' => $data['id'], 'id' => $this->request->getVar('id')])->First();
        if ($check) {
            $rname = $this->request->getVar('name');
            $number = $this->request->getVar('number');
            $desc = $this->request->getVar('desc');
            $price = $this->request->getVar('price');
            $status = $this->request->getVar('status');

            $file = $this->request->getFile('image');
            if($file != null) {
              $test = $file->move(PUBLIC_PATH.'\\account\\'.$data['id'].'\\');
              $name = $file->getClientPath();
              $path = '/account/'.$data['id'].'/'.$name;
              if (!$test) {
                return $this->respond(['msg' => 'can\'t save image.'], 200); 
              } else { 
                unlink(PUBLIC_PATH.$check['photo']);
                $data1 = [
                  'name' => $rname,
                  'description' => $desc,
                  'number' => $number,
                  'price' => $price,
                  'photo' => $path,
                  'status' => $status,

                ];
                $res = $this->room->set($data1)->where('id', $this->request->getVar('id'))->update();
                  if ($res) {
                    return $this->respond(['msg' => 'okay'], 200);
                  } else {
                    $delfile = PUBLIC_PATH.$path;
                    unlink($delfile); 
                    return $this->respond(['msg' => 'an error has occurred'], 200);
                  }
                }
              } else {
                  $data1 = [
                    'name' => $rname,
                    'description' => $desc,
                    'number' => $number,
                    'price' => $price,
                    'photo' => $check['photo'],
                    'status' => $status,
                  ];
    
                  $res = $this->room->set($data1)->where('id', $this->request->getVar('id'))->update();
                  if ($res) {
                    return $this->respond(['msg' => 'okay'], 200);
                  } else { 
                    return $this->respond(['msg' => 'an error has occurred'], 200);
                  }
                }
          //save
        } else {
          $rname = $this->request->getVar('name');
          $number = $this->request->getVar('number');
          $desc = $this->request->getVar('desc');
          $price = $this->request->getVar('price');
          $status = $this->request->getVar('status');

          $file = $this->request->getFile('image');
          if($file != null) {

          $test = $file->move(PUBLIC_PATH.'\\account\\'.$data['id'].'\\');
          $name = $file->getClientPath();
          $path = '/account/'.$data['id'].'/'.$name;

          if (!$test) {
            return $this->respond(['msg' => 'can\'t save image.'], 200); 
          } else { 
            $data1 = [
              'name' => $rname,
              'description' => $desc,
              'number' => $number,
              'price' => $price,
              'photo' => $path,
              'status' => $status,
              'account_id' => $data['id'],
            ];
            
            $res = $this->room->save($data1);
            if ($res) {
              return $this->respond(['msg' => 'okay'], 200);
            } else {
              $delfile = PUBLIC_PATH.$path;
              unlink($delfile); 
              return $this->respond(['msg' => 'an error has occurred'], 200);
            }
          }
        } else {
            $data1 = [
              'name' => $rname,
              'description' => $desc,
              'number' => $number,
              'price' => $price,
              'photo' => 'default.jpg',
              'status' => $status,
              'account_id' => $data['id'],
            ];
              $res = $this->room->save($data1);
                if ($res) {
                  return $this->respond(['msg' => 'okay'], 200);
                } else {
                  return $this->respond(['msg' => 'an error has occurred'], 200);
                }
            }
            
        }
    }

}
