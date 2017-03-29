function mail() {
    var e = document.getElementById("fname");
    if(e.value.length==0)
    {
    	label("eprompt"," *","red");
    	return false;
    }
    else if(!e.value.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/))
        { 
            label("eprompt"," &#10008 This emailaddress is Invalid","red");
            return false;
        }
        label("eprompt"," &#10004","green");
    return true;
}
function usernam() {
    var u = document.getElementById("username");
    if(u.value.length==0)
    {
        label("uprompt"," *","red");
        return false;
    }
    
    
    label("uprompt"," &#10004","green");
    return true;

}
function pass() {


}
function label(id,x,color)
{
    document.getElementById(id).innerHTML=x;
    document.getElementById(id).style.color=color;
}


