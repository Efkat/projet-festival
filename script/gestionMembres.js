let membersCount = 1
let membersInformations = ""
let membersDisableInput = document.getElementById('membresVariables')

const membersMax = 8;
const addButton = document.getElementById("add")
const delButton = document.getElementById("delete")
const submitButton = document.getElementById("submit")
const cardContainer = document.getElementById("container")
const cards = document.getElementsByClassName("card")


/* BUTTONS */
//Add button
addButton.addEventListener("click", function (event) {
    event.preventDefault();
    if (membersCount < membersMax) {
        //CONFIRMATION
        let inputs = cards[membersCount-1].querySelectorAll('input')
        let atLeastOneIsEmpty = false;
        for (let j = 0; j < inputs.length; j++) {
            if(inputs[j].value==""){ atLeastOneIsEmpty=true; }
            else{
                inputs[j].setAttribute('disabled', "")
                inputs[j].setAttribute('style', "color:rgb(170, 169, 169);font-style:italic;")
            }
        }
        if(!atLeastOneIsEmpty)
        {
            if(membersCount>1){ membersInformations+="\\" }
            membersInformations += getCardInformation(cards[membersCount-1])
            membersDisableInput.setAttribute("value", membersInformations)
            
            //ADD
            membersCount++
            cardContainer.insertAdjacentHTML('beforeend', '<section class="card border-secondary m-2" style="width: 12rem">\n' +
                '                                    <div class="card-header">MEMBRE 1</div>\n' +
                '                                    <div class="card-body">\n' +
                '                                        <div class="form-group">\n' +
                '                                            <input type="text" class="form-control my-1 nom-input" placeholder="Nom">\n' +
                '                                            <input type="text" class="form-control my-1 prenom-input" placeholder="Prénom">\n' +
                '                                            <input type="text" class="form-control my-1 instrument-input"\n' +
                '                                                placeholder="Instrument">\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '                                </section>')
            alert(membersInformations)
            updateCardsNumber()
        }
        else{ alert("Veuillez saisir tous les champs")}
        
    } else {
        alert("Nombre de membres maximale atteint")
    }
    
    
});

//Delete Button
delButton.addEventListener("click", function (event) {
    event.preventDefault();
    if (membersCount > 1) {
        membersCount--
        cardContainer.removeChild(cardContainer.lastElementChild)
        updateCardsNumber()
    } else {
        alert("Un membre au minimum !")
    }
})

//Submit Button
submitButton.addEventListener("click",function (event) {
    let inputs = cards[membersCount-1].querySelectorAll('input')
    if(inputs[0].value!="" && inputs[1].value!="" && inputs[2].value!="")
    {
        if(membersCount>1){ membersInformations+="\\" }
        membersInformations += getCardInformation(cards[membersCount-1])
        membersDisableInput.setAttribute("value", membersInformations)
    }
    alert(membersInformations);
})

/* FUNCTIONS */
function getCardInformation(card) {
    let nom = card.querySelector(".nom-input").value
    let prenom = card.querySelector(".prenom-input").value
    let instrument = card.querySelector(".instrument-input").value
    return nom + '/' + prenom + '/' + instrument
}

function updateCardsNumber() {
    for (let index = 0; index < cardContainer.childNodes.length; index++) {
        cards[index].firstElementChild.innerHTML = "MEMBRE " + (index + 1)
    }
}