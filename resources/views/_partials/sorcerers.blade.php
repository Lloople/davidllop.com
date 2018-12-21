<div class="sorcerers text-right xs:text-center">
    <div class="conversations">
        <div class="conversation xs:text-center" data-number="1">
            <div data-wait="3000" class="cbbl -right">Got any hints?</div>
            <div data-wait="3000" class="cbbl">No, I'm afraid not.</div>
            <div data-wait="3000" class="cbbl">However if you search within yourself, then...</div>
            <div data-wait="2000" class="cbbl -right">Cut it out, ok?</div>
            <div data-wait="5000" class="cbbl -right">I asked for a hint not the crazy philosophies of a Father Christmas look-a-like.</div>
            <div data-wait="4000" class="cbbl">Heed my words, bold adventurer, and your path will lead to wisdom and..</div>
            <div data-wait="4000" class="cbbl -right">There's just no reasoning with him...</div>
        </div>

        <div class="conversation xs:text-center" data-number="2">
            <div data-wait="3000" class="cbbl -right">I'm totally stuck as what to do.</div>
            <div data-wait="6000" class="cbbl">I really wish I could help you but I'm just a clueless old fool.</div>
            <div data-wait="3000" class="cbbl -right">Never a truer word was spoken.</div>
        </div>
    </div>


    <div class="characters">
        <img id="calypso" class="w-8 flip-h" src="/media/simon-the-sorcerer-calypso.gif" alt="Calypso from Fleur deLys">
        <img id="simon" class="w-12" src="/media/simon-the-sorcerer.gif" alt="Simon The Sorcerer">
    </div>
</div>

<script>
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

        let bubbles = Array.from(document.querySelectorAll('.conversations .conversation[data-number="'+conversation+'"] div'));

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
        })
    };
</script>