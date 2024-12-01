const el = document.getElementById('sensitive-content');
const sibling = el.parentElement.parentElement.previousElementSibling.previousElementSibling;

const overlay = document.createElement('div');
overlay.classList.add('sensitive-overlay');

const header = document.createElement('h1');
const description = document.createElement('p');
const button = document.createElement('button');

header.innerHTML = 'Content Warning';
description.innerHTML = 'The content you are trying to view is sensitive.';
button.innerHTML = 'See Content';

overlay.appendChild(header);
overlay.appendChild(description);
overlay.appendChild(button);

button.addEventListener('click', function () {
    overlay.style.display = 'none';
});

sibling.appendChild(overlay);








