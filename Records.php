<?php
class Records{
    public string $name,$email,$gender,$phone,$date;
        

    function __construct(string $name,string $email,string $gender,string $phone,string $date)
    {
            $this->name=$name;
            $this->email=$email;
            $this->gender=$gender;
            $this->phone=$phone;
            $this->date=$date;
    }

   
  

}
?>
