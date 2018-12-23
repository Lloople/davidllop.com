let conversationStarted = false;
let conversation = 1;
const conversations = document.querySelectorAll('.conversations .conversation');
let audio = null;

// Show the next conversation when clicking on Simon
document.querySelector('#simon').addEventListener('click', async (e) => {
    e.preventDefault();

    await startConversation();

    if (conversation < conversations.length) {
        conversation++;
    }
});

// Load the music after clicking in the Sorcerers area
document.querySelector('.sorcerers').addEventListener('click', () => {

    // Just one audio element per request, I don't want you to download the music if you don't click on the Sorcerers!
    if (audio === null) {
        audio = new Audio('/media/calypso_magicke_emporium.mp3');
        audio.loop = true;
        audio.play();

        // Only play music when the mouse is inside the Sorcerers area
        document.querySelector('.sorcerers').addEventListener('mouseover', () => {
            audio.volume = 0.7;
        });
    }
});

// Mute the music when the mouse leaves the Sorcerers area
document.querySelector('.sorcerers').addEventListener('mouseleave', (e) => {
    audio.volume = 0.0;
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