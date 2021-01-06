const submitEditButton = document.getElementById('submit_edit');
const members = document.getElementsByClassName("card");
let membersDisableInput = document.getElementById('membresVariables')
let membersInformations = "";
let membersCount = members.length;



//Submit Button in c_edit
submitEditButton.addEventListener("click",function(event)
{
    for(let i=0;i<membersCount;i++)
    {  
        if(i>0){ membersInformations+="\\\\" }
        membersInformations += getCardInformation(members[i])
        membersDisableInput.setAttribute("value", membersInformations)
    }
})


function getCardInformation(member) {
    let nom = member.querySelector(".nom-input").value
    let prenom = member.querySelector(".prenom-input").value
    let instrument = member.querySelector(".instrument-input").value

    //VERIF / et \
    nom = nom.replaceAll('/',' ');
    nom = nom.replaceAll('\\',' ');
    prenom = prenom.replaceAll('/',' ');
    prenom = prenom.replaceAll('\\',' ');
    instrument = instrument.replaceAll('/',' ');
    instrument = instrument.replaceAll('\\',' ');
    return nom + '/' + prenom + '/' + instrument
}