// GET function for AJAX
// traditional javascript function
function manageRoom() {

    //stop the default behaviour of element
    event.preventDefault();

    //get the user search term
    var roomName = document.getElementById('activeRoom').value;

    alert(roomName);

    //start ajax code here
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            alert(this.responseText);
        }
    };

    xhttp.open("GET", "../admin/manageroom.php?manageroom=" + roomName, true);

    xhttp.send();
}