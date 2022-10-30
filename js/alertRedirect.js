function alertRedirect(){
        
    alert("Changes made.");
    location.replace("../admin/category.php");
}

function alertRedirect_admin(message,redirect_destination){
        
    alert(message);
    location.replace("../admin/"+redirect_destination);
}