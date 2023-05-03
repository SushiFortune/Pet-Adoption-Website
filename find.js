
        function myFunction() {
          alert("This is a privacy statement to assure you that your information will not be sold or misused, and the website builder protects you from falsified information.");
        }

        function Validate()
        {
            var gender=document.getElementsByName('gender');
            var type=document.getElementsByName('type');
            var breed=document.getElementsByName('breed');
            var along=document.getElementsByName('along');
     
            if (!(type[0].checked || type[1].checked)) {
            alert("Please Select the type");
            return false;}
         
            for(var i=0; i<breed.length;i++)
            {
                var check=false;
                if(breed[i].checked)
                {check=true;
                break;}
            }

            if(check==false)
                {alert("Please Select the breed");
                return false;}

            if (!(gender[0].checked || gender[1].checked || gender[2].checked)) {
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
                
        }
        
   