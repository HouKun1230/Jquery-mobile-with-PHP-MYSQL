function check(obj){
 with(obj){
     if((username.value+"").length <= 0){
          alert("user does not exist");
          return false;
     }else if((password.value+"").length <= 0){
      
         alert("user name can not  be empty");
         return false;
     }else{
         return true;
     }
 }
}