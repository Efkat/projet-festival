let membersCount = 1
let membersInformations = ""
let membersDisableInput = document.getElementById('membresVariables')

const membersMax = 8;
const addButton = document.getElementById("add")
const delButton = document.getElementById("delete")
const cardContainer = document.getElementById("container")
const cards = document.getElementsByClassName("card")


/* BUTTONS */
//Add button
addButton.addEventListener("click", function (event) {
    event.preventDefault();
    if (membersCount < membersMax /*&& [verification non vide] */) {
        
        //CONFIRMATION
        let inputs = cards[membersCount-1].querySelectorAll('input')
        for (let j = 0; j < inputs.length; j++) {
            inputs[j].setAttribute('disabled', "")
        }
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
            '                                        <button type="button" class="btn btn-sm btn-outline-info">Confirmer membre</button>\n' +
            '                                    </div>\n' +
            '                                </section>')
        alert(membersInformations)
        updateCardsNumber()
        
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