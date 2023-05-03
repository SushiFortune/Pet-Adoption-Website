function myFunction() {
    alert("This is a privacy statement to assure you that your information will not be sold or misused, and the website builder protects you from falsified information.");
  }

  function Validate()
  {
      var gender=document.getElementsByName('gender');
      var type=document.getElementsByName('type');
      var along=document.getElementsByName('along');
      var family=document.getElementsByName('family');
      var brag=document.getElementById('brag').value;
      var fname=document.getElementById('fname').value;
      var email=document.getElementById('email').value;

      if (!(type[0].checked || type[1].checked)) {
      alert("Please Select the type");
      return false;}

      if (!(gender[0].checked || gender[1].checked)) {
      alert("Please Select Your Gender");
      return false;}

      for(var i=0; i<along.length;i++)
      {
          var check=false;
          if(along[i].checked)
          {check=true;
          break;}         
      }

      if(check==false)
          {alert("Please Select the along option");
          return false;}

      
      for(var i=0; i<family.length;i++)
      {
          var check=false;
          if(family[i].checked)
          {check=true;
          break;}         
      }

      if(check==false)
          {alert("Please Select the family option");
          return false;}
      
      if (brag === "" || brag===null)
      {alert("Don't forget to brag about your pet!");
      return false;
      }

      if (fname === "" || fname===null)
      {alert("Please enter your name");
      return false;
      }

      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      if (email === "" || email===null || !email.match(mailformat))
      {alert("Please enter a valid email");
      return false;
      }    
              
  }