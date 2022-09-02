<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
     
      $this->view('pages/index');
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
    public function save()
    {
      
      $model = $this->model('insertdata');
      $res = $model->insert(); 
        
     
      if($res==true)
      {
        $message = [
          'mes' => 'registration successful login now'
        ]; 
       $this->view('pages/login',$message);
       
      }
      else
      {
        $mess = [
          'mes' => 'Email already exists!'
        ];
        $this->view('pages/index',$mess);
      }
      
      
    }

    public function print()
    {
      $model = $this->model('insertdata');
      $posts = $model->fetchAllData();
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/posts',$data);
     


    }
    public function signin()
    {
      $this->view('pages/login');
    }
    
    public function check()
    {
      if(isset($_POST['log']))
      {
        $check=$this->model('logincheck');
        $val = $check->loginvalidate();
        if(($val->email===$_POST['emaill']) && ($val->password===$_POST['passwordl']))
        {
          session_start();
          $_SESSION["username"]=$val->firstname;
          $_SESSION["email"]=$val->email;
          $this->view('pages/comment');
        }
        else  
        {
          $err = [
            'errormessage' => 'Invalid credentials'
          ];
          $this->view('pages/login',$err);
        }
      }
      else
      {
        $err1 = [
          'errormessage' => 'Fill all details'
        ];
        $this->view('pages/login',$err1);
        
      }
  
    }
    public function postandlogout()
    {
      if(isset($_POST['tweetbutton']))
      {
      
          session_start();
          $usermail = $_SESSION["email"];
          $model = $this->model('insertdata');
          $resultpost = $model->commentinsert($usermail);   
          if($resultpost)
          {
            $showcomment = [
              'showcomment' => 'tweeted sucessfully'
            ];
            $this->view('pages/comment',$showcomment);
          }
          else
          {
            echo "error inserting comment";
          }

      }
      else if(isset($_POST['logoutbutton']))
      {
        session_start();
        session_unset();        
        session_destroy();
        $this->view('pages/login');
      }
    } 
  
  }