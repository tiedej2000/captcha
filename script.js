const form = document.querySelector('form')
const fieldsets = document.querySelectorAll('fieldset')

form.addEventListener('submit', (event)=>{
    let allChecked = true

    fieldsets.forEach(fieldset =>{
        let isChecked = false
        const radioButtons = fieldset.querySelectorAll('input[type="radio"]');

        radioButtons.forEach(radio =>{
            if(radio.checked){
                isChecked = true
            }
        })

        if(!isChecked){
            allChecked = false
        }
    })

    if(!allChecked){
        event.preventDefault()
        alert('Bitte treffe eine Auswahl in jedem Feld.')
    }
})