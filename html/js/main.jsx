

const popUpNotification = (message, prio) => {
    const notification = document.createElement('div');
    const title = document.createElement('h2');
    notification.classList.add('notification');
    notification.classList.add(prio);
    title.innerHTML = message;
    notification.appendChild(notification);
}

const voorbeeldAanroep = () => {
    popUpNotification('This is a notification', 'info')
}