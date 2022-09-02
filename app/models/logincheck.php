<?php

    class logincheck extends Database
    {
        public function loginvalidate()
        {
            $email=$_POST['emaill'];
            $password=$_POST['passwordl'];
            $this->query("select firstname,email,password from user where email='$email'");
            return $this->single();
            //$v = $this->single();

           /* if($v)
            {
                if($v->password==$password)
                return true;
            }
            else
            {
                return false;
            }*/
            

        }
    }
