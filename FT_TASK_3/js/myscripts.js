function checkname()
{
    var namevalue=document.getElementById("fn").value;
    if(namevalue.length<5)
    {
        document.getElementById("unameerror").innerHTML="First Name error";
        return false;
    }
    else
    {
        document.getElementById("unameerror").innerHTML="First Name is ok";
        return true;
    }
}

function checklastname()
{
    var namevalue1=document.getElementById("ln").value;
    if(namevalue1.length<5)
    {
        document.getElementById("unamelasterror").innerHTML="Last Name error";
    }
    else
    {
        document.getElementById("unamelasterror").innerHTML="Last Name is ok";
    }
}




function checkage()
{
    var namevalue2=document.getElementById("age").value;
    if(isNaN(namevalue2))
    {
        document.getElementById("ageerror").innerHTML="Age error";
    }
    else
    {
        document.getElementById("ageerror").innerHTML="Age is ok";
    }
}
function checkemail()
       {
        var x=document.getElementById("em").value; 
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  
        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
          alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
          return false;  
          }  
       }


function checkpass()
{
    var namevalue4=document.getElementById("pass").value;
    if(namevalue4.length<5)
    {
        document.getElementById("passerror").innerHTML="Password error";
    }
    else
    {
        document.getElementById("passerror").innerHTML="Password is ok";
    }
}


function checkfile()
{
    var namevalue5=document.getElementById("file").value;
    if(namevalue5.length<5)
    {
        document.getElementById("fileerror").innerHTML="File uploading error";
    }
    else
    {
        document.getElementById("fileerror").innerHTML=" Done";
    }
}



function checkradio1()
{
    
    if(document.getElementById("des1").checked == true || document.getElementById("des2").checked == true || document.getElementById("des3").checked == true)
    {
       
       document.getElementById("radio1error").innerHTML="ok";
       return true;
    }
    else
    {
       
        document.getElementById("radio1error").innerHTML="not ok";
    return false;
    } 

}

function checkboxcheck()
{
    
    if(document.getElementById("des1").checked == true || document.getElementById("des2").checked == true || document.getElementById("des3").checked == true)
    {
       
       document.getElementById("radio1error").innerHTML="ok";
       return true;
    }
    else
    {
    
        document.getElementById("radio1error").innerHTML="not ok";
    return false;
    } 
    
}
function formcheck()
{
    if(checkradio1()==true && checkname()==true)
    {
        return true;
    }
    else{
    return false;
}
}


