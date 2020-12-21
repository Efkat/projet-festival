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
        membersInformations += getCardInformation(members[i])
        membersDisableInput.setAttribute("value", membersInformations)
    }
})


function getCardInformation(member) {
    let nom = member.querySelector(".nom-input").value
    let prenom = member.querySelector(".prenom-input").value
    let instrument = member.querySelector(".instrument-input").value
    return nom + '/' + prenom + '/' + instrument
}