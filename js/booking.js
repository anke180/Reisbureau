

const setAmountOfGuests = () => {

    const amountOfGuests = document.querySelector('#amountGuests').value;
    const registerForm = document.querySelector('#registerform');
    console.log(amountOfGuests);
    for(let i = 0; i < amountOfGuests; i++) {

        const voornaamLabel = document.createElement("label");
        voornaamLabel.textContent = "Voornaam";

        const persoonLabel = document.createElement("label");
        persoonLabel.textContent = "Persoon " + i;

        const voornaamInput = document.createElement('input');
        voornaamInput.type = 'text';
        voornaamInput.placeholder = 'Voornaam ';
        voornaamInput.name = 'voornaam' + i;
        voornaamInput.classList.add('ggggg');

        const adresLabel = document.createElement("label");
        adresLabel.textContent = "Adres";
        
        const adresInput = document.createElement('input');
        adresInput.type = 'text';
        adresInput.placeholder = 'Adres + huisnummer';
        adresInput.name = 'adres' + i;
        adresInput.classList.add('ggggg');

        const achternaamLabel = document.createElement("label");
        achternaamLabel.textContent = "Achternaam";

        const achternaamInput = document.createElement('input');
        achternaamInput.type = 'text';
        achternaamInput.placeholder = 'Achternaam ';
        achternaamInput.name = 'achternaam' + i;
        achternaamInput.classList.add('ggggg');

        const emailLabel = document.createElement("label");
        emailLabel.textContent = "email";

        const emailInput = document.createElement('input');
        emailInput.type = 'email';
        emailInput.placeholder = 'Email ';
        emailInput.name = 'email' + i;
        emailInput.classList.add('ggggg');

        const geboortedatumLabel = document.createElement("label");
        geboortedatumLabel.textContent = "Geboortedatum";

        const geboortedatumInput = document.createElement('input');
        geboortedatumInput.type = 'date';
        geboortedatumInput.placeholder = 'Geboortedatum ';
        geboortedatumInput.name = 'geboortedatum' + i; 
        geboortedatumInput.classList.add('ggggg');

        const geslachtLabel = document.createElement("label");
        geslachtLabel.textContent = "Geslacht";

        const geslachtInput = document.createElement('input');
        geslachtInput.type = 'option';
        geslachtInput.placeholder = 'geslacht ';
        geslachtInput.name = 'geslacht' + i; 
        geslachtInput.classList.add('ggggg');

        const bankgegevensLabel = document.createElement("label");
        bankgegevensLabel.textContent = "Bankgegevens";

        const bankgegevensInput = document.createElement('input');
        bankgegevensInput.type = 'text';
        bankgegevensInput.placeholder = 'banknummer ';
        bankgegevensInput.name = 'bankgegevens' + i; 
        bankgegevensInput.classList.add('ggggg');
        
        const formContainer = document.createElement('div');
        formContainer.classList.add('form-container');


        formContainer.appendChild(persoonLabel);
        formContainer.appendChild(voornaamLabel);
        formContainer.appendChild( voornaamInput);
        formContainer.appendChild(achternaamLabel);
        formContainer.appendChild( achternaamInput);
        formContainer.appendChild(geboortedatumLabel);
        formContainer.appendChild( geboortedatumInput);
        formContainer.appendChild(adresLabel);
        formContainer.appendChild( adresInput);
        formContainer.appendChild(emailLabel);
        formContainer.appendChild( emailInput);
        formContainer.appendChild(geslachtLabel);
        formContainer.appendChild( geslachtInput);
        formContainer.appendChild(bankgegevensLabel);
        formContainer.appendChild( bankgegevensInput);

        registerForm.appendChild(formContainer);
    }
}