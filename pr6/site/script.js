document.getElementById('addCardForm').addEventListener('submit', async function (event) {
    event.preventDefault();

    const title = document.getElementById('cardTitle').value;
    const description = document.getElementById('cardDescription').value;
    const image = document.getElementById('cardImage').value;

    try {
        const response = await fetch('save_card.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ title, description, image }),
        });

        if (!response.ok) {
            throw new Error('Ошибка при добавлении карточки');
        }

        const newCard = await response.json();
        addCardToGallery(newCard);
        alert('Карточка успешно добавлена!');
    } catch (error) {
        console.error(error);
        alert('Произошла ошибка при добавлении карточки.');
    }
});

function addCardToGallery(card) {
    const galleryContainer = document.getElementById('galleryContainer');

    const cardHtml = `
        <div class="col-lg-4 col-sm-6 mix workout">
            <div class="gallery-item">
                <img src="${card.image}" alt="${card.title}">
                <div class="gi-hover-warp">
                    <div class="gi-hover">
                        <a href="${card.image}" class="image-popup"><i class="fa fa-search-plus"></i></a>
                        <a href="#"><i class="fa fa-chain"></i></a>
                        <h6>${card.title} <span>${card.description}</span></h6>
                    </div>
                </div>
            </div>
        </div>
    `;

    galleryContainer.insertAdjacentHTML('beforeend', cardHtml);
}

window.addEventListener('load', async function () {
    try {
        const response = await fetch('get_cards.php');
        if (!response.ok) {
            throw new Error('Ошибка при загрузке карточек');
        }

        const cards = await response.json();
        cards.forEach(addCardToGallery);
    } catch (error) {
        console.error(error);
        alert('Произошла ошибка при загрузке карточек.');
    }
});