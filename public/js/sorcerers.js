let conversationStarted = false;
let conversation = 1;
const conversations =  document.querySelectorAll('.conversations .conversation');

document.querySelector('#simon').addEventListener('click', async (e) => {
    e.preventDefault();

    await startConversation();

    if (conversation < conversations.length) {
        conversation++;
    }
});

let startConversation = async () => {
    if (conversationStarted) {
        return;
    }

    conversationStarted = true;

    let bubbles = Array.from(conversations[conversation - 1].querySelectorAll('div'));

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