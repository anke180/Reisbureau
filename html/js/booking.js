

const setAmountOfGuests = () => {
    const amountOfGuests = document.querySelector('#amountGuests').value;
    const registerForm = document.querySelector('#registerform');
    console.log(amountOfGuests);
    for(let i = 0; i < amountOfGuests; i++) {
        const voornaamInput = document.createElement('input');
        voornaamInput.type = 'text';
        voornaamInput.placeholder = 'Voornaam ' + i;
        voornaamInput.name = 'voornaam' + i;
        
        const adresInput = document.createElement('input');
        adresInput.type = 'text';
        adresInput.placeholder = 'Adres + huisnummer' + i;
        adresInput.name = 'adres' + i;

        const achternaamInput = document.createElement('input');
        achternaamInput.type = 'text';
        achternaamInput.placeholder = 'Achternaam ' + i;
        achternaamInput.name = 'achternaam' + i;

        const emailInput = document.createElement('input');
        emailInput.type = 'email';
        emailInput.placeholder = 'Email ' + i;
        emailInput.name = 'email' + i;

        const geboortedatumInput = document.createElement('input');
        geboortedatumInput.type = 'date';
        geboortedatumInput.placeholder = 'Geboortedatum ' + i;
        geboortedatumInput.name = 'geboortedatum' + i; 
        
        
        
        registerForm.appendChild(voornaamInput);
        registerForm.appendChild( achternaamInput);
        registerForm.appendChild(adresInput);
        registerForm.appendChild( emailInput);
        registerForm.appendChild( geboortedatumInput);
    }
}