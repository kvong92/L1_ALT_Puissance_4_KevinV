function checkMessage() {
    let message = inputMessage;
    console.log(msg);

    if (!msg) {
        return (false);
    }
    return (true);
}

function getFetchOptions(bodyData) {
    const body = new URLSearchParams(bodyData);
    return {
        method: 'POST',
        body: body,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    }
}

const inputMessage = document.querySelector('#message_text');
const submitSend = document.querySelector('#formMessage');

submitSend.addEventListener('submit', (event) => {
    event.preventDefault();
})

inputMessage.addEventListener('keypress', (event) => {
    if (event.key == 'Enter') {
        fetch('send_message.php', getFetchOptions({ message: event.target.value }))
        .then(res => res.json())
        .then(data => {
            console.log(data);
        })
    }
})