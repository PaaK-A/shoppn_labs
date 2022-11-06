function alertRedirect(){
        
    alert("Changes made.");
    location.replace("../admin/category.php");
}

function alertRedirect_index(message){
        
    alert(message);
    location.replace("../index.php");
}

function alertRedirect_admin(message,redirect_destination){
        
    alert(message);
    location.replace("../admin/"+redirect_destination);
}

function alertRedirect_view(message,redirect_destination){
        
    alert(message);
    location.replace("../view/"+redirect_destination);
}