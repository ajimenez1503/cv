/**
* Dispaly view:
*/
function displayView(view){
        //check that view only can be: Profile/Skill/Contact
        if(view==='Profile' || view==='Skill' || view=='Contact' || view==='Project'){
            //everything is display none and remove active class
            setDisplayNone();
            destActivate();

            //view is display none and add active class
    		document.getElementById(view).style.display="block";
            document.getElementById("link"+view).classList.add("active");
        }
}

/**
* Dispaly none for all the elements
*/
function setDisplayNone(){
    var c = document.getElementById("content").childNodes;
    var i;
    for (i = 0; i < c.length; i++) {
        if(typeof(c[i].id) !== 'undefined')
        document.getElementById(c[i].id).style.display="none";
    }
}

/**
* Des-activate all the elements
*/
function destActivate(){

    var c = document.getElementById("tab").childNodes;
    var i;
    for (i = 0; i < c.length; i++) {
        if(typeof(c[i].id) !== 'undefined')
        document.getElementById(c[i].id).classList.remove("active");
    }
}
