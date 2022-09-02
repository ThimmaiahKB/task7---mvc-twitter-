<?php

    class insertdata extends Database
    {
        public function insert()
        {
            $email = $_POST['email'];
            $this->query("select email from user where email='$email'"); 
            $found = $this->single();
            if($found)
            {
            
                return false;
            }
            else
            {
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $password=$_POST['password'];
                $this->query("insert into user (firstname,lastname,email,phone,password)values('$fname','$lname','$email','$phone','$password')");
                return $this->execute();
            }
                           

        }


        public function fetchAllData()
        {
            $this->query("select * from user");
            return $this->resultSet();
        }

        public function commentinsert($usermail)
        {
            $mailadd = $usermail;
            $comment = $_POST["comment"];
            $this->query("update user set comment='$comment' where email='$mailadd'");
            return $this->execute();
            /*
            if($updated)
            {
                $this->query("select comment from user where email='$mailadd'");
                return $this->single();
            }
            else
            {
                return false;
            }
            */

            

        }
    }
?>