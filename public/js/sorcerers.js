let conversationStarted = false;
let conversation = 1;
const lastConversation = document.querySelector('.conversations .conversation:last-child').dataset.number;

document.querySelector('#simon').addEventListener('click', async (e) => {
    e.preventDefault();

    if (conversation > lastConversation) {
        conversation = lastConversation;
    }

    await startConversation();

    if (conversation < lastConversation) {
        conversation++;
    }
});

let startConversation = async () => {
    if (conversationStarted) {
        return;
    }

    conversationStarted = true;

    let bubbles = Array.from(
        document.querySelectorAll('.conversations .conversation[data-number="'+conversation+'"] div')
    );

    for (let index in bubbles) {
        let bubble = bubbles[index];

        bubble.classList.add('visible');

        await wait(bubble.dataset.wait);

        bubble.classList.remove('visible');

        await wait(250);
    }

    conversationStarted = false;
};

let wait = (ms) => {
    return new Promise((resolve, reject) => {
        setTimeout(() => { resolve(); }, ms);
    });
};