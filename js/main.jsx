// gemaakt door Anke in de les
console.log('Hallo wereld');

const titelnew = document.querySelector('#titel');

const waarschuwing = () => {  
    // titelnew.className = 'waarschuwing';
    // titelnew.alt = 'waarschuwing';
    console.log(titel.textContent);
    titelnew.textContent = 'Pas op, je hebt de titel veranderd!';
    console.log(titel.textContent);
}


const popUpNotification = (message, prio) => {
    const notification = document.createElement('div');
    const titel = document.createElement('h2');
    notification.classList.add('notificaion');
    notification.classList.add(prio);
    titel.innerHTML = message;
    notification.appendChild(titel);
    document.body.appendChild(notification);
}

const voorbeeldAanroep = () => {
    popUpNotification('This is a notification', 'info');
}