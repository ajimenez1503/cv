///////////////////////////////////////////////////////

/**
* Dispaly view:
*/
function displayView(view){
        console.log(view)
        //check that view only can be: Profile/Skill/Contact
        if(view==='Profile' || view==='Skill' || view=='Contact'){
            //everything is display none and remove active class
            document.getElementById("Profile").style.display="none";
            document.getElementById("Skill").style.display="none";
            document.getElementById("Project").style.display="none";
            document.getElementById("Contact").style.display="none";
            document.getElementById("linkProfile").classList.remove("active");
            document.getElementById("linkSkill").classList.remove("active");
            document.getElementById("linkProject").classList.remove("active");
            document.getElementById("linkContact").classList.remove("active");

            //view is display none and add active class
    		document.getElementById(view).style.display="block";
            document.getElementById("link"+view).classList.add("active");
        }

}
