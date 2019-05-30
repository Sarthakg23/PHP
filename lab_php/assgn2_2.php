<html>
<head>    
      <script type = "text/javascript">
	  function email(){
		   var e=document.myForm.EMail.value;  
             var atpos=e.indexOf("@");  
             var dotpos=e.lastIndexOf("."); 
		 
         if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length){  		
             return false;  
              }
	  }
       
      function validate() {
           
         if( document.myForm.Name.value.length <6 ) {
            alert( "Name should not be less than 6 characters!" );
            document.myForm.Name.focus() ;
            return false;
         }
		 if(email() == false){
			 alert("Please enter a valid e-mail address"); 
            document.myForm.EMail.focus() ;	
			return false;
		 }
			 
		   
         if( document.myForm.password.value.length < 6 ) 
		 {
            
            alert( "Password should not be less than 6 characters!" );
            document.myForm.Password.focus() ;
            return false;
         }
         if(document.myForm.phoneno.value.length != 10){
            alert( "Invalid Phone number" );
			document.myForm.phoneno.focus() ;
            return false;
		 }
         
         else
		 {
			 return "Registration Successfull";
		 }
      }
      </script>      
   </head>
   <body>
    <header>ASSIGNMENT 2 PART 2</header>
	<divl>
      <form action = "" name = "myForm" onsubmit = "return(validate());">
         <table cellspacing = "2" cellpadding = "2" border = "1">
            
            <tr>
               <td align = "right">NAME</td>
               <td><input type = "text" name = "Name" /></td>
            </tr>
            
            <tr>
               <td align = "right">EMAIL</td>
               <td><input type = "text" name = "EMail" /></td>
            </tr>
            
            <tr>
               <td align = "right">PASSWORD</td>
               <td><input type = "password" name = "password" /></td>
            </tr>
            <tr>
               <td align = "right">PHONE NO</td>
			   <td><input type = "text" name = "phoneno" /></td>
            </tr>
            
            <tr>
               <td align = "left" colspan = "2">
               <input type = "submit" value = "Submit"  /></td>
            </tr>
            
         </table>
		
      </form>

</body>
</html>	 