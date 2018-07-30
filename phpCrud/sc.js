function validate()
{

       if( document.myForm.Name.value == "" )
       {
          window.alert( "Please provide your name!" );
          document.myForm.Name.focus() ;
          return false;
       }

       if( document.myForm.MobileNo.value == "" )
       {
          alert( "Please provide your Mobile no.!" );
          document.myForm.MobileNo.focus() ;
          return false;
       }

       if( document.myForm.Age.value == "" )
       {
          alert( "Please provide your age!" );
          document.myForm.Age.focus() ;
          return false;
       }

       if( document.myForm.Address.value == "" )
       {
          alert( "Please provide your address!" );
          document.myForm.Address.focus() ;
          return false;
       }

       if( document.myForm.EMail.value == "" )
       {
          alert( "Please provide your Email!" );
          document.myForm.EMail.focus() ;
          return false;
       }
       return "true";
}
